<?php
if (empty($_SESSION)) {
    session_start();
}
$_SESSION = array();

session_destroy();
