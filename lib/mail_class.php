<?php

// my_mail_class.php

class My_Mail 
{
    var $to = '';
    var $from = '';
    var $reply_to = '';
    var $cc = '';
    var $bcc = '';
    var $subject = '';
    var $body = '';
	
    var $validate_email = true;
    var $rigorous_email_check = false;

    var $allow_empty_subject = false;
    var $allow_empty_body = false;
	 
    var $headers = array();
	
    var $ERROR_MSG;
	
    var $ERR_EMPTY_MAIL_TO = "Empty to field!";
    var $ERR_EMPTY_SUBJECT = "Empty subject field!";
    var $ERR_EMPTY_BODY = "Empty body field!";
    var $ERR_SEND_MAIL_FAILURE = "An error occured while attempting to send email!";
    var $ERR_TO_FIELD_INVALID = "To field contains invalid email address(es)!";
    var $ERR_CC_FIELD_INVALID = "Cc field contains invalid email address(es)!";
    var $ERR_BCC_FIELD_INVALID = "Bcc field contains invalid email address(es)!";
	
    var $STR_NO_ERROR = "No error has occured yet.";

    function check_fields() 
    {
        if(empty($this->to)) {
	    $this->ERROR_MSG = $this->ERR_EMPTY_MAIL_TO;
	    return false;
	}
		
	if(!$this->allow_empty_subject && empty($this->subject)) {
	    $this->ERROR_MSG = $this->ERR_EMPTY_SUBJECT;
	    return false;
	}
		
	if(!$this->allow_empty_body && empty($this->body)) {
	    $this->ERROR_MSG = $this->ERR_EMPTY_BODY;
	    return false;
	}
		
    $this->to = preg_replace("/;/", ",", $this->to);
	$this->cc = preg_replace("/;/", ",", $this->cc);
	$this->bcc = preg_replace("/;/", ",", $this->bcc);
		
	if(!empty($this->from)) $this->headers[] = "From: $this->from";
	if(!empty($this->reply_to)) $this->headers[] = "Reply-To: $this->reply_to";
		
	// Check email addresses if specified so.
	if($this->validate_email) {
	    $to_emails = explode(",", $this->to);
	    if(!empty($this->cc)) $cc_emails = explode(",", $this->cc);
	    if(!empty($this->bcc)) $bcc_emails = explode(",", $this->bcc);
		
	    // Use MX records to furthur check email addresses.
	    if($this->rigorous_email_check) {
	        if(!$this->rigorous_email_check($to_emails)) {
	            $this->ERROR_MSG = $this->ERR_TO_FIELD_INVALID;
	            return false;
	        } 
	        else if(is_array($cc_emails) && !$this->rigorous_email_check($cc_emails)) {
	            $this->ERROR_MSG = $this->ERR_CC_FIELD_INVALID;
	            return false;
	        }
	        else if(is_array($bcc_emails) && !$this->rigorous_email_check($bcc_emails)) {
	            $this->ERROR_MSG = $this->ERR_BCC_FIELD_INVALID;
                    return false;
	        }
	    }else {
		if(!$this->email_check($to_emails)) {
		    $this->ERROR_MSG = $this->ERR_TO_FIELD_INVALID;
		    return false;
		}
		else if(is_array($cc_emails) && !$this->email_check($cc_emails)) {
		    $this->ERROR_MSG = $this->ERR_CC_FIELD_INVALID;
		    return false;
		}
		else if(is_array($bcc_emails) && !$this->email_check($bcc_emails)) {
		    $this->ERROR_MSG = $this->ERR_BCC_FIELD_INVALID;
		    return false;
		}
	    }
	}
	
	    return true;
    }

    function email_check($emails) 
    {
        foreach($emails as $email) {
		   if(preg_match("/<(.+)>/", $emails, $match)) $email = $match[1];
		//    if(!eregi("^[_\-\.0-9a-z]+@([0-9a-z][_0-9a-z\.]+)\.([a-z]{2,4}$)", $email)) return false;			
		}
		return true;
    }  

    function rigorousEmailCheck($emails) 
    {
        if(!$this->email_check($emails)) return false;
	
        foreach($emails as $email) {
            list ($user, $domain) = split ( "@", $email, 2 );  
	    if(checkdnsrr( $domain, "ANY"))  return true;
	    else {
	        return false;
	    }
	}

    }

    function build_headers() 
    {
        if(!empty($this->cc)) $this->headers[] = "Cc: $this->cc";
	if(!empty($this->bcc)) $this->headers[] = "Bcc: $this->bcc";
	
    }
 
    function send() 
    {
        if(!$this->check_fields()) return 0;
		
	$this->build_headers();
		
	if(mail($this->to, stripslashes(trim($this->subject)), stripslashes($this->body), implode("\r\n", $this->headers))) return true;
	
        else {
	    $this->ERROR_MSG = $this->ERR_SEND_MAIL_FAILURE;
	    return false;
	}
    }

    function error_msg() 
    {
        if(empty($this->ERROR_MSG)) 
        {
            return $this->STR_NO_ERROR;
			return $this->ERROR_MSG;
        }

    }
}

// my_mime_mail_class.php

class My_Mime_Mail extends My_Mail 
{
    var $type = 'text/html';
    var $charset = 'utf-8';
	
    var $encoding = '8bit';
	
    var $has_attach = 0;
    var $files = array();
	
    var $mime_type = 'application/octet-stream';
    var $mime_version = "MIME-Version: 1.0";
    var $mime_msg = "This is a multi-part message in MIME format.";
	
    var $mailer = 'Codeshp Mime Mailer 1.0';
	
    var $boundary = '';
	
    var $ERR_CANNOT_OPEN_FILE = 'Cannot open the specified file!';

    function build_mime_headers() 
    {
        $this->headers[] = "CS-Mailer: " . $this->mailer;
        $this->headers[] = $this->mime_version;
		
        if($this->has_attach) {
            $this->boundary = md5(uniqid(time()));
  	    $this->headers[] = "Content-Type: multipart/mixed; boundary=\"$this->boundary\"\r\n";
	    $this->headers[] = $this->mime_msg . "\r\n";
	    $this->headers[] = "--" . $this->boundary;
        }
	
        $this->headers[] = "Content-Type: $this->type; charset=$this->charset";
        $this->headers[] = "Content-Transfer-Encoding: $this->encoding";
	
    }


    function build_body_parts() 
    {
        if(!$this->has_attach) return true;
        $body_parts[0] .= $this->body . "\r\n\r\n"; 
	
        for($i=0; $i < count($this->files); $i++) {
            if(!($fp = @fopen($this->files[$i]["file"], "r"))) {
	        $this->ERROR_MSG = $this->ERR_CANNOT_OPEN_FILE . " " . $this->files[$i]["file"];
	        return false;
	    }
			
	$file_body = fread($fp, filesize($this->files[$i]["file"]));
	$file_body = chunk_split(base64_encode($file_body));
			
	$body_parts[$i+1] = "--" . $this->boundary . "\r\n";
			
	if(!empty($this->files[$i]["filetype"])) $this->mime_type = $this->files[$i]["filetype"];
			
	    $body_parts[$i+1] .= "Content-Type: " . $this->mime_type . ";name=" . basename($this->files[$i]["filename"]) .  "\r\n";
	    $body_parts[$i+1] .= "Content-Transfer-Encoding: base64\r\n\r\n";
	    $body_parts[$i+1] .= $file_body . "\r\n\r\n";
	}
	
	$body_parts[$i+1] .= "--" . $this->boundary . "--";
	$this->body = implode("", $body_parts);
		
	return true;
	
    }

    function viewMsg() 
    {
        if(count($this->files) > 0) $this->has_attach = true;
        if(!$this->check_fields()) return false;
		
        $this->headers = array();
        $this->build_headers();
		
        $this->headers[] = "From: $this->from";
        $this->headers[] = "To: $this->to";
        $this->headers[] = "Subject: $this->subject";
		
        $this->build_mime_headers();
        if(!$this->build_body_parts()) return false;
		
        $msg = implode("\r\n", $this->headers);
		
        $msg .= "\r\n\r\n";
        $msg .= $this->body;
		
        return $msg;
    }

    function send() 
    {
        if(count($this->files) > 0) $this->has_attach = true;
		
        if(!$this->check_fields()) return false;
		
        $this->subject = stripslashes(trim($this->subject));
        $this->body = stripslashes($this->body);
		
        $this->build_headers();
        $this->build_mime_headers();
        if(!$this->build_body_parts()) return false;
		
        if(mail($this->to, $this->subject, $this->body, implode("\n", $this->headers))) return true;
        else {
            $this->ERROR_MSG = $this->ERR_SEND_MAIL_FAILURE;
            return false;
        }
    }
}

?>
