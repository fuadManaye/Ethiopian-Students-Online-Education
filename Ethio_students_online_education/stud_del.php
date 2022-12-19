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
?>


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
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST['del_id'])){
        echo "please enter id to delete!!";
    }
    else{
        $del_id=$_POST['del_id'];
        $sql="DELETE FROM users where id=$del_id";
        if($conn->query($sql)){
            echo "<script> alert('the student is removed successfully!!'); </script>";   
        }
        else
        echo "not deleted";
    }
}
    $conn->close();
    ?>