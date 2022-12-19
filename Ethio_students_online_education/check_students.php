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
        <title>View list of enrolled students  </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
        <style>
        body{
            background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('./img/studview.jpg');
            height:90vh;
            background-size: cover;
            background-position: center;
        }
        h1{
            color:green;
            text-align:center;
            font-size:25px;
            font-family:lobster;
            }
        .sty1{
            margin:50px;
            text-align:center;
        }
        form input{
            margin-left:80px;
            color:#123284;
        }
        p{
            color:white;
            margin-left:60px;
        }
        input{
            color:#123844;
            font-weight:bold;
        }
        input:hover{
            color:red;
        }
        @media screen and (max-width:668px) {
            form input{
                margin-left:20px;
            }
        }
        @media screen and (max-width:468px) {
            form input{
                float:left;
                font-size:10px;
                margin-top:-10px;
            }
            p{
                margin-left:0px;
                font-size:10px;
            }
        }
        </style>
</head>
<body>
<h1> View list of enrolled students  </h1>
    <pre>
    <form method="Get" action="admin_main.php">
        <input type="submit" value="Back to Admin Page">
    </form>
    <form method="POST" action="see_reg_stud.php">
        <input type="submit" name="studlist" value="see registered students">
    </form>
    <form method="POST" action="stud_del.php">
        <p><i><b>Enter the Id of the student you want to delete: </b></i></p><input type="text" name="del_id"><br>
        <input type="submit" value="Delete">
    </form>
    <form method="POST" action="stud_search.php">
        <p><i><b>Enter the Id of the student you want to search:</b></i></p> <input type="text" name="sea_id"><br>
        <input type="submit" value="Search">
    </form>
    <form method="Get" action="check_students.php">
        <input type="submit" value="clear forms">
    </form>
</pre>
</body>
</html>


<?php
if($_SERVER["REQUEST_METHOD"]=="GET"){
    $_POST['studlist']="";
    $_POST['del_id']="";
    $_POST['sea_id']="";
}
?>


