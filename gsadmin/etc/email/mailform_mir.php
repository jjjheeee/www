<?
include $_SERVER['DOCUMENT_ROOT']."/common.php";
	


 if($_POST['content']) {

	 $site_host = "http://".$_SERVER["HTTP_HOST"];

	 $admin_stat=$db->object("cs_admin", "");

	$content=$tools->strHtml($_POST['content']); 

	 // 신규회원가입
	 $content = str_replace("[{USER_NAME}]","이름", $content);
	 $content = str_replace("[{USER_ID}]","아이디", $content);
	 $content = str_replace("[{USER_PASSWD}]","패스워드", $content);
	 $content = str_replace("[{USER_EMAIL}]","이메일", $content);
	 $content = str_replace("[{USER_TEL}]","전화번호", $content);
	 $content = str_replace("[{USER_PHONE}]","휴대폰번호", $content);
	 $content = str_replace("[{USER_ADDRESS}]","주소", $content);
	 $content = str_replace("[{USER_CONTENT}]","내용", $content);

	 // 상품주문
	 $content = str_replace("[{ORDER_NAME}]","주문자 이름", $content);
	 $content = str_replace("[{TRADE_CODE}]","주문 코드", $content);
	 $content = str_replace("[{TRADE_METHOD}]","결제 방법", $content);
	 $content = str_replace("[{TRADE_METHOD_INFO}]","결제 정보", $content);
	 $content = str_replace("[{TRADE_PRICE}]","결제 금액", $content);
	 $content = str_replace("[{TRADE_DAY}]","주문일", $content);
	 $content = str_replace("[{TRADE_MONEY_OK}]","결제일", $content);
	 $content = str_replace("[{TRADE_COMPANY}]","배송회사", $content);
	 $content = str_replace("[{TRADE_NUMBER}]","배송번호", $content);
	 $content = str_replace("[{DELIV_NAME}]","받을 사람이름", $content);
	 $content = str_replace("[{DELIV_TEL}]","받을 사람 전화번호", $content);
	 $content = str_replace("[{DELIV_ADDRESS}]","받을 주소", $content);		
	 $content = str_replace("[{ORDER_GOODS}]","주문 상품", $content);		

	 // 쇼핑몰 기본 정보
	 $content = str_replace("[{SHOP_NAME}]", $admin_stat->shop_name, $content);
	 $content = str_replace("[{SHOP_DOMAIN}]", $site_host, $content);
	 $content = str_replace("[{SHOP_CEO}]", $admin_stat->shop_ceo, $content);
	 $content = str_replace("[{SHOP_TEL}]", $admin_stat->shop_tel, $content);
	 $content = str_replace("[{SHOP_EMAIL}]", $admin_stat->shop_email, $content);
	 $content = str_replace("[{SHOP_ADDRESS}]", $admin_stat->shop_address, $content);

	 // 출력
	 echo($content);
}
?>