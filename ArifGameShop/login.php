<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arif Game Shop - Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
 <br><br><br><br>
	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>
		<hr style="width: 310px;">
 
		<form action="proses.php" method="post">
			<label>Username :</label>
			<input type="text" name="username" class="form_login" placeholder="Username ..." required="required">
 
			<label>Password :</label>
			<input type="password" name="password" class="form_login" placeholder="Password ..." required="required">
 
			<input type="submit" class="tombol_login" value="LOGIN">
			<a href="index.php"><input type="button" class="tombol_kembali" value="KEMBALI"></a>
		</form>
       
	</div>
    <?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>
 
 
</body>
</html>

<style>
	body{
		background-image: url(assets/imgs/bg.jpg);
		background-repeat: no-repeat;
		background-position: center;
		background-size:cover;
		height: 100%;
	}
</style>