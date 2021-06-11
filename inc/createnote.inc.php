<?php

session_start();
include_once 'db.inc.php';
include 'functions.inc.php';

$id= mysqli_real_escape_string($conn,$_POST['note-id']);
$title= mysqli_real_escape_string($conn,$_POST['note-title']);
$content= mysqli_real_escape_string($conn,$_POST['note-content']);
$fav = mysqli_real_escape_string($conn,$_POST['fav']);

if(isset($_SESSION['id'])){
    if(empty($id)){
        echo $fav;
        if(empty($title)&&empty($content))
            echo 'Enter some data';
         else
            createNotes($conn,$_SESSION['id'],$title,$content,$fav);
    }else{
        updateNote($conn,$id,$title,$content,$fav);
    }
}