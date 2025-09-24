<?
include $_SERVER['DOCUMENT_ROOT']."/common.php";

 if($_POST[content]) {
	 $admin_stat=$db->object("cs_admin", "");

	 if($_POST[tag]) { $content=$tools->strHtml($_POST[content]); } else { $content=$tools->strHtmlNo($_POST[content]); }

	 // 신규회원가입
	 $content = str_replace("__USER_NAME__","회원 이름", $content);
	 $content = str_replace("__USER_ID__","회원 아이디", $content);
	 $content = str_replace("__USER_PASSWD__","회원 패스워드", $content);
	 $content = str_replace("__USER_JUMIN__","회원 주민등록번호", $content);
	 $content = str_replace("__USER_EMAIL__","회원 이메인", $content);
	 $content = str_replace("__USER_TEL__","회원 전화번호", $content);
	 $content = str_replace("__USER_ADDRESS__","회원 주소", $content);

	 // 상품주문
	 $content = str_replace("__ORDER_NAME__","주문자 이름", $content);
	 $content = str_replace("__TRADE_CODE__","주문 코드", $content);
	 $content = str_replace("__TRADE_METHOD__","결제 방법", $content);
	 $content = str_replace("__TRADE_METHOD_INFO__","결제 정보", $content);
	 $content = str_replace("__TRADE_PRICE__","결제 금액", $content);
	 $content = str_replace("__TRADE_DAY__","주문일", $content);
	 $content = str_replace("__TRADE_MONEY_OK__","결제일", $content);
	 $content = str_replace("__TRADE_COMPANY__","배송회사", $content);
	 $content = str_replace("__TRADE_NUMBER__","배송번호", $content);
	 $content = str_replace("__DELIV_NAME__","받을 사람이름", $content);
	 $content = str_replace("__DELIV_TEL__","받을 사람 전화번호", $content);
	 $content = str_replace("__DELIV_ADDRESS__","받을 주소", $content);		
	 $content = str_replace("__ORDER_GOODS__","주문 상품", $content);		

	 // 쇼핑몰 기본 정보
	 $content = str_replace("__SHOP_NAME__", $admin_stat->shop_name, $content);
	 $content = str_replace("__SHOP_DOMAIN__", $admin_stat->shop_domain, $content);
	 $content = str_replace("__SHOP_CEO__", $admin_stat->shop_ceo, $content);
	 $content = str_replace("__SHOP_TEL__", $admin_stat->shop_tel1, $content);
	 $content = str_replace("__SHOP_EMAIL__", $admin_stat->shop_email, $content);
	 $content = str_replace("__SHOP_ADDRESS__", $admin_stat->shop_address, $content);
	 $content = str_replace("__MAILFORM_IMAGES_URL__",$admin_stat->shop_url, $content);

	 // 출력
	 echo($content);
}
?>