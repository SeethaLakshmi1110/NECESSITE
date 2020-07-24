<?php

session_start();

unset($_SESSION["sid"]);

unset($_SESSION["name"]);

header("location:seller_page.php");

?>