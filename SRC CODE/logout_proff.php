<?php
unset($_SESSION['username']);
header("location:forprofessionals.html");
session_destroy();
?>