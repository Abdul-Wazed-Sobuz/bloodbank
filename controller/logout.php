<?php

session_destroy();
$_SESSION['user']='';
session_unset();
header('Location: ../view/login.php');