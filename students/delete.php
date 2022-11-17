<?php
include ("../init.php");
use Models\Student;

$_id = $_GET['_id'];
$id = new MongoDB\BSON\ObjectId("$_id");
$deleteStudent = new Student('','','','','','','','');
$deleteStudent->setConnection($connection);
$deleteStudent->deleteStudent($id);
echo "<script>window.location.href='index.php';</script>";
exit;