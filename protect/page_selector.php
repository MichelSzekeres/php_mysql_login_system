<?php
include('../lab/database.php');
include('../lab/config.php');
include('../lab/user.php');
include('../lab/page.php');

session_start(); #start session in here as all pages are processed over.
error_reporting(E_ALL); #in production set this one to 0 IMPORTANT!!!
ob_start("page::sanitize_output"); #sanitize HTML output and compress it using class page sanitize_output function

page::is_index();
/* if you plan bigger website with different views change this so something  more effective */
/* if the website is  */
switch(page::path()):
    case '/': include('../view/index.php'); break;
    case '/reg': include('../view/register.php'); break;
    case '/logout': include('../view/logout.php'); break;
    case (strpos(page::path(), '/sign-in')) : include('../view/sign-in.php'); break;
    case (strpos(page::path(), '/sign-up')): include('../view/sign-up.php'); break;
    default: include('../view/error/404.php');break;
endswitch;

//DO NOT REMOVE this protect the data from leaked to public/index.php on any way.
die();
