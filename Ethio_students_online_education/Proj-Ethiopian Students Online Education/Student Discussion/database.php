<?php
$server_name="localhost";
$user_name="root";
$password="";

$conn=new mysqli($server_name,$user_name,$password);
if($conn->connect_error){
    die("connection failed: ".$conn->connect_error);
}
// echo "connected successfully!! <br>";


$sql="CREATE DATABASE comment_section";
if($conn->query($sql)===true){
    // echo "database blog created successfully!!";
}
else
    // echo "error creating database ".$conn->error;
?>

<?php
$server_name="localhost";
$user_name="root";
$password="";
$dbName="comment_section";
$conn=new mysqli($server_name,$user_name,$password,$dbName);
if($conn->connect_error){
    // die("connection failed: ".$conn->connect_error);
}
$sql="CREATE TABLE IF NOT EXISTS tbl_comment (
    comment_id int(11) NOT NULL,
    parent_comment_id int(11) NOT NULL,
    comment varchar(200) NOT NULL,
    comment_sender_name varchar(40) NOT NULL,
    date timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
  )";

if($conn->query($sql)===true){
    // echo "table users created successfully!!";
}
else
    // echo "error creating table ".$conn->error."<br>";
?>



<?php
$sql="ALTER TABLE tbl_comment ADD PRIMARY KEY (comment_id)";
if($conn->query($sql)===true){
    // echo "table users created successfully!!";
}
else
    // echo "error creating table ".$conn->error."<br>";
?>

<?php
$sql="ALTER TABLE tbl_comment MODIFY comment_id int(11) NOT NULL AUTO_INCREMENT";
if($conn->query($sql)===true){
    // echo "table users created successfully!!";
}
else
    // echo "error creating table ".$conn->error."<br>";
?>

