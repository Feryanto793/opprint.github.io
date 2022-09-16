<?php

session_start();
if(!isset($_SESSION["username"])) header("Location:/12/login.php");
