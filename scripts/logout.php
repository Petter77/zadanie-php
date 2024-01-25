<?php
session_start();
unset($_SESSION['newSession']);
header('location:../index.php');