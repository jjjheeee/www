<?
  $end=9999;
  $num=rand(1000,$end);
?>
<?

$num1 = substr($num,0,1);
$num2 = substr($num,1,1);
$num3 = substr($num,2,1);
$num4 = substr($num,3,1);
$num5 = substr($num,4,1);


switch($num1){

	case 0 :
	$img1 = "0.jpg";
	break;
	
	case 1 :
	$img1 = "1.jpg";
	break;
	
	case 2 :
	$img1 = "2.jpg";
	break;
	
	case 3 :
	$img1 = "3.jpg";
	break;
	
	case 4 :
	$img1 = "4.jpg";
	break;
	
	case 5 :
	$img1 = "5.jpg";
	break;
	
	case 6 :
	$img1 = "6.jpg";
	break;
	
	case 7 :
	$img1 = "7.jpg";
	break;
	
	case 8 :
	$img1 = "8.jpg";
	break;
	
	case 9 :
	$img1 = "9.jpg";
	break;
	
}

switch($num2){

	case 0 :
	$img2 = "0.jpg";
	break;
	
	case 1 :
	$img2 = "1.jpg";
	break;
	
	case 2 :
	$img2 = "2.jpg";
	break;
	
	case 3 :
	$img2 = "3.jpg";
	break;
	
	case 4 :
	$img2 = "4.jpg";
	break;
	
	case 5 :
	$img2 = "5.jpg";
	break;
	
	case 6 :
	$img2 = "6.jpg";
	break;
	
	case 7 :
	$img2 = "7.jpg";
	break;
	
	case 8 :
	$img2 = "8.jpg";
	break;
	
	case 9 :
	$img2 = "9.jpg";
	break;
	
}

switch($num3){

	case 0 :
	$img3 = "0.jpg";
	break;
	
	case 1 :
	$img3 = "1.jpg";
	break;
	
	case 2 :
	$img3 = "2.jpg";
	break;
	
	case 3 :
	$img3 = "3.jpg";
	break;
	
	case 4 :
	$img3 = "4.jpg";
	break;
	
	case 5 :
	$img3 = "5.jpg";
	break;
	
	case 6 :
	$img3 = "6.jpg";
	break;
	
	case 7 :
	$img3 = "7.jpg";
	break;
	
	case 8 :
	$img3 = "8.jpg";
	break;
	
	case 9 :
	$img3 = "9.jpg";
	break;
	
}

switch($num4){

	case 0 :
	$img4 = "0.jpg";
	break;
	
	case 1 :
	$img4 = "1.jpg";
	break;
	
	case 2 :
	$img4 = "2.jpg";
	break;
	
	case 3 :
	$img4 = "3.jpg";
	break;
	
	case 4 :
	$img4 = "4.jpg";
	break;
	
	case 5 :
	$img4 = "5.jpg";
	break;
	
	case 6 :
	$img4 = "6.jpg";
	break;
	
	case 7 :
	$img4 = "7.jpg";
	break;
	
	case 8 :
	$img4 = "8.jpg";
	break;
	
	case 9 :
	$img4 = "9.jpg";
	break;
	
}

$cnum = $num1.$num2.$num3.$num4;
$_SESSION['CNUM'] = $cnum;
?>





