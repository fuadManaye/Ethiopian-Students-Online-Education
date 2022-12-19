<!DOCTYPE html>
<html>
    <head>
        <title> enrolled students </title>
        <style>
        form input{
            margin-left:80px;
            color:#123284;
        }
        input{
            color:#123844;
            font-weight:bold;
        }
        input:hover{
            color:red;
        }
        </style>
</head>
<body>
<form method="POST" action="check_students.php" style="color:green;">
        <input type="submit" value="Back to Main">
    </form>
</body>
</html>


<?php
$server_name="localhost";
$user_name="root";
$password="";
$dbName="login_page";
$conn=new mysqli($server_name,$user_name,$password,$dbName);
if($conn->connect_error){
    die("connection failed: ".$conn->connect_error);
}
// echo "connected successfully <br>";
$sql="SELECT id,email,password,name from users";
$result=$conn->query($sql);
if($result->num_rows>0){
    echo "<table border=''><tr style='color:red;'><th>ID</th><th>Email</th><th>Password</th><th>Name</th></tr>";
    while($row=$result->fetch_assoc()){
        echo "<tr style='color:green;'><td>$row[id]</td><td>$row[email]</td><td>$row[password]</td><td>$row[name]</td></tr>";
    echo "<br>";
    }
    echo "</table>";
}
?>