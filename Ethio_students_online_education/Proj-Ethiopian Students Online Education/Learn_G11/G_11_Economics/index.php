<!DOCTYPE html>
<html>
    <head>
        <title>Learn Economics  </title>
        <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<nav>
    <ul>
        <li><a href="../G_11.html">back to main</a></li>
    </ul>
</nav>
<div class="logo">
    <img src="img/online.png">
</div>
<h2> Learn Economics </h2>
<form method="POST" enctype="multipart/form-data" action="upload.php">
<input type="file" name="file">  <input type="submit" id="upload" value="Upload">
</form>
</body>
</html>


<?php
$files=scandir("uploads");
for($a=2; $a<count($files);$a++){
?>
<p>
    <?php echo $files[$a] ?>: 
    <button><a download="<?php echo $files[$a] ?>" href="uploads/<?php echo $files[$a] ?>">Download Now</a></button>
    <button><a href="uploads/<?php echo $files[$a] ?>"> Read Online</a> </button>
    </p>
    <?php
}