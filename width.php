<?php
//track screen width
$pwidth = $_POST["width"];     
if (($pwidth >= 1) && ($pwidth <= 480)) { $size='xs';}     
elseif (($pwidth >= 481) && ($pwidth <= 768)) { $size='sm';} 
elseif (($pwidth >= 769) && ($pwidth <= 1199)) { $size='md';} 
elseif ($pwidth >= 1200) { $size='lg';} 
else {$size='';}
$_SESSION['width'] = $size;