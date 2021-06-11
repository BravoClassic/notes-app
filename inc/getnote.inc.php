<?php
session_start();
include_once 'db.inc.php';
include 'functions.inc.php';
$noteid = $_GET['id'];
if (isset($_SESSION['id'])) {
    getNote($conn,$_SESSION['id'],$noteid);
}
