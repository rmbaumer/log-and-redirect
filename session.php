<?php
//session.php
ini_set('session.cookie_domain', '.yourdomain.tld' ); 
session_start();

//track entry page
if (!is_array($_SESSION['page'])) {
  $_SESSION['page'] = array('entry' => $_SERVER['REQUEST_URI']);
}
$entry = $_SESSION['page']['entry'];

