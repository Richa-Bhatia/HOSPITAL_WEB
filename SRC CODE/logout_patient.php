<?php
unset($_SESSION['username']);
header("location:index.html");
session_destroy();
?>