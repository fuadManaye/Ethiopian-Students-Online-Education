<!DOCTYPE html>
<html>
<head>
	<title>Student Login</title>
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
	.click{
		background-color: #c9a4a9;
	}
	.click:hover {
		background-color: #c0acac;
	}
	.click,.links {
		padding: 5px;
		font-size: 1em;
		font-family: futura Md BT;
		border: none;
		outline: none;
		width:100px;
		color:#fff;
		transition: 0.3s;
		border-radius: 12px;
	}
	.list {
		font-size:12px;
		position: absolute;
		transform: scaleY(0);
		transform-origin;
		transition: 0.3s;
	}
	.newlist {
		margin:35px;
		margin-left:-12px;
		transform: scaleY(1);
	}
	.links {
		margin:5px;
		background-color: #cbd4e6;
	}
	.links:hover {
		background-color: #01579B;
		transform: scale(1.1);
	}
	form {
		width: 350px;
		border: 2px solid rgb(161, 157, 157);
		border-radius:20px;
		padding: 30px;
		background: lightgrey;
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
	<section style="margin-right: 1000px;position:relative;width:100px;">
		<button class="click">Select Role</button>
		<div class="list">
			<a href="#"><button class="links">Student</button></a>
			<a href="admin"><button class="links">Admin</button></a>
		</div>
</section>
	<script>
	let click = document.querySelector('.click');
	let list = document.querySelector('.list');
	click.addEventListener("click",()=>{
		list.classList.toggle('newlist');
	});
	</script>
	<form action="login.php" method="post">
     	<h2>Student Login</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Email</label>
     	<input type="email" name="email" placeholder="Email"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">Login</button>
          <a href="signup.php" class="ca">Register Here</a>
     </form>
</body>
</html>