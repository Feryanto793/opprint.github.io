<?php

session_start();
if(!isset($_SESSION["username"])) header("Location: /boss/login.php");
