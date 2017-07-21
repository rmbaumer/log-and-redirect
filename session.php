<?php
ini_set('session.cookie_domain', '.yourdomain.tld' ); 
session_start();

// Entry Page
if (!is_array($_SESSION['page'])) {
  $_SESSION['page'] = array('entry' => $_SERVER['REQUEST_URI']);
}
$entry = $_SESSION['page']['entry'];

