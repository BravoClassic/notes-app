<?php
session_start();
include_once 'db.inc.php';
include 'functions.inc.php';
if (isset($_SESSION['id'])) {
    getfavnotes($conn,$_SESSION['id']);
}
