<?php 

 // gd에 사용될 임시 변수들 
$IsTrueColor = false; 
$Extension = null; 

 // 이미지를 로딩하는 함수입니다. 
function GDImageLoad($filename) 
 { 
 global $IsTrueColor, $Extension; 

 if( !file_exists($filename) ) return false; 

 $image_type = @exif_imagetype($filename); 

 switch( $image_type ) { 
 case IMAGETYPE_JPEG: // JPEG일경우 
$im = imagecreatefromjpeg($filename); 
 $Extension = "jpg"; 
 break; 
 case IMAGETYPE_GIF: // GIF일 경우 
$im = imagecreatefromgif($filename); 
 $Extension = "gif"; 
 break; 
 case IMAGETYPE_PNG: // png일 경우 
$im = imagecreatefrompng($filename); 
 $Extension = "png"; 
 break; 
 default: 
 break; 
 } 

 $IsTrueColor = @imageistruecolor($im); 

 return $im; 
 } 

 // 이미지 크기를 줄입니다. 
function GDImageResize($src_file, $dst_file, $width = NULL, $height = NULL, $type = NULL, $quality = 75) 
 { 
 global $IsTrueColor, $Extension; 

 $im = GDImageLoad($src_file); 

 if( !$im ) return false; 

 if( !$width ) $width = imagesx($im); 
 if( !$height ) $height = imagesy($im); 

 if( $IsTrueColor && $type != "gif" ) $im2 = imagecreatetruecolor($width, $height); 
 else $im2 = imagecreate($width, $height); 

 if( !$type ) $type = $Extension; 

 imagecopyresampled($im2, $im, 0, 0, 0, 0, $width, $height, imagesx($im), imagesy($im)); 

 if( $type == "gif" ) { 
 imagegif($im2, $dst_file); 
 } 
 else if( $type == "jpg" || $type == "jpeg" ) { 
 imagejpeg($im2, $dst_file, $quality); 
 } 
 else if( $type == "png" ) { 
 imagepng($im2, $dst_file); 
 } 

 imagedestroy($im); 
 imagedestroy($im2); 

 return true; 
 } 
 ?> 
