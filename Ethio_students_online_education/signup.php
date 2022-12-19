<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
     <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
	<style>
	.back{
		background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('./img/back.jpg');
		height:90vh;
		background-size: cover;
		background-position: center;
	}
	body {
		background: #1690A7;
		display: flex;
		justify-content: center;
		align-items: center;
		height: 100vh;
		flex-direction: column;
	}
	form {
		width: 350px;
		border: 2px solid rgb(161, 157, 157);
		border-radius:20px;
		padding: 5px;
		background:lightgrey;
		border-radius: 15px;
	}
	h2 {
		text-align: center;
		margin-bottom: 40px;
		color:rgb(228, 102, 102);
		font-size:20px;
		font-family:Lobster;
	}
	input {
		display: block;
		border: 2px solid #ccc;
		width: 95%;
		padding: 10px;
		margin: 10px auto;
		border-radius: 15px;
	}
	label {
		color: #888;
		font-size: 18px;
		padding: 10px;
		font-family:Lobster;
	}
	button {
		float: right;
		background: #555;
		padding: 6px 26px;
		color: #fff;
		border-radius: 10px;
		margin-right: 10px;
		border: none;
	}
	button:hover{
		opacity: .7;
		color:red;
	}
	.ca {
		font-size: 14px;
		display: inline-block;
		padding: 10px;
		text-decoration: none;
		color: #444;
		font-family:Lobster;
	}
	.ca:hover {
		text-decoration: underline;
	} 
	</style>
</head>
<body class="back">
     <form action="signup-check.php" method="post">
     	<h2>SIGN UP</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Name</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"><br>
          <?php }?>

          <label>Email</label>
          <?php if (isset($_GET['email'])) { ?>
               <input type="email" 
                      name="email" 
                      placeholder="Email"
                      value="<?php echo $_GET['email']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="email" 
                      placeholder="Email"><br>
          <?php }?>


     	<label>Password</label>
     	<input type="password" 
                 name="password" 
                 placeholder="Password"><br>

          <label>Re Password</label>
          <input type="password" 
                 name="re_password" 
                 placeholder="Re_Password"><br>

     	<button type="submit">Sign Up</button>
          <a href="index.php" class="ca">Already have an account?</a>
     </form>
</body>
</html>