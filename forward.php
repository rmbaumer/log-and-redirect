<?php
include('../session.php');

// Entry Page
switch ($entry) {
  case '/aSubpage/':
    $entryid = 'a01';
    break;
  case '/anotherSubpage/':
    $entryid = 'a02';
    break;
  case '/':
    $entryid = 'hmp';
    break;
  default:
    $entryid = 'NA';  
}

// Exit Page
switch ($_SERVER['HTTP_REFERER']) {
  case 'https://www.yourdomain.tld/aSubpage/':
    $entryid = 'a01';
    break;
  case 'https://www.yourdomain.tld/anotherSubpage/':
    $entryid = 'a02';
    break;
  case 'https://www.yourdomain.tld':
    $entryid = 'hmp';
    break;
  default:
    $entryid = 'NA';  
}

// Screen Width 
$size = $_SESSION['width'];

// Log Redirect
$ipAddress = $_SERVER['REMOTE_ADDR'];
if (array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER)) {
    $ipAddress = array_pop(explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']));
}
$log_entry = time().','.$ipAddress.','.$entryid.','.$exitid.','.$size.',"'.$_SERVER['HTTP_USER_AGENT'].'"';
$log = file_put_contents(date('Y-m').'.txt', $log_entry.PHP_EOL , FILE_APPEND);

$sid = $entryid.$exitid.$size;

$url = '//example.tld/?sid='$sid;

header( 'X-Robots-Tag: noindex, nofollow', true);  
header( 'Expires: Sat, 26 Jul 1997 05:00:00 GMT' );
header( 'Last-Modified: ' . gmdate( 'D, d M Y H:i:s' ) . ' GMT' );
header( 'Cache-Control: no-store, no-cache, must-revalidate' );
header( 'Cache-Control: post-check=0, pre-check=0', false );
header( 'Pragma: no-cache' ); 
header( 'refresh:0;url='.$url );