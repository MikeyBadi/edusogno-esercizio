<?php 
    include('./dbConnection.php')
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/styles/style.css">
    <title>Edusogno</title>
</head>

<body>
    <header class="headerCont">
        <a href="./index.php"><img src="./assets/img/logo.png" alt="EDUSOGNO LOGO"></a>
    </header>
    <main class="container">
		<h1>Hai già un account?</h1>
		<form method="post" action="index.php" class="loginCont">
			<?php include('errors.php'); ?>
				<label class="label">Inserisci l'e-mail</label>
				<input class="input" type="text" name="email" placeholder="name@example.com" required>
				<hr>
				<label class="label" >Inserisci la password</label>
				<input class="input" type="password" name="password" id="password" placeholder="Inserisci la password" required>
				<span class="occhio"><i class="fa-solid fa-eye"></i></span>
				<hr>
				<button type="submit" class="button" name="login_user" id="buttonLogin">ACCEDI</button>
			<p>
				Non hai ancora un profilo? <a href="register.php">Registrati</a>
			</p>
		</form>
</main>
<script src="./assets/js/script.js"></script>
</body>

</html>