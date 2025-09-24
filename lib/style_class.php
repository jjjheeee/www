<?
	class Style {
		function strCheck($check=0) {
			if( $check == 0 ){							// int 형
				echo( "onKeyPress='if( (event.keyCode<48) || (event.keyCode>57) ) event.returnValue=false;'" );
			} else if( $check == 1 ){					// float 형
				echo( "onKeyPress='if( (event.keyCode<46) || (event.keyCode>57) || (event.keyCode==47) ) event.returnValue=false;'" );	
			} else if( $check == 2 ){					// 숫자 및 영어(소)
				echo( "onKeyPress='if( ((event.keyCode<48) || (event.keyCode>57)) && ((event.keyCode<97) || (event.keyCode>123)) ) event.returnValue=false;'" );	
			}
		}
		function align($check=0) {
			if( $check == 0 ) {							// 중간 정렬
				echo( "style='text-align: center;'");
			} else if( $check == 1 ) {					// 좌측 정렬
				echo( "style='text-align: left;'");
			} else if( $check == 2 ) {					// 우측 정렬
				echo( "style='text-align: right;'");
			}
		}
		function colorAlign( $color='#000000', $check=0 ) {
			if( $check == 0 ) {							// 중간 정렬
				echo( "style='text-align: center; color: $color;'");
			} else if( $check == 1 ) {					// 좌측 정렬
				echo( "style='text-align: left; color: $color;'");
			} else if( $check == 2 ) {					// 우측 정렬
				echo( "style='text-align: right; color: $color;'");
			}
		}
		function bgColorAlign( $bg="#FFFFFF", $color='#000000', $check=0 ) {
			if( $check == 0 ) {							// 중간 정렬
				echo( "style='text-align: center; color: $color; background-color:$bg;'");
			} else if( $check == 1 ) {					// 좌측 정렬
				echo( "style='text-align: left; color: $color; background-color:$bg;'");
			} else if( $check == 2 ) {					// 우측 정렬
				echo( "style='text-align: right; color: $color; background-color:$bg;'");
			}
		}
	}

	$style = new Style();
?>