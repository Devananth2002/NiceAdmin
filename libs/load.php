<?php

include $_SERVER['DOCUMENT_ROOT']."/niceadmin/libs/includes/Database.class.php";
include $_SERVER['DOCUMENT_ROOT']."/niceadmin/libs/includes/User.class.php";
include $_SERVER['DOCUMENT_ROOT']."/niceadmin/libs/includes/Session.class.php";

Session::start();

function load_homepage_template($value)
{
    include $_SERVER['DOCUMENT_ROOT']."/niceadmin/templates/$value.php";
}