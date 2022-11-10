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
<main>
<section class="container">
		<h1>Crea il tuo account</h1>
        <form method="post" action="register.php" id="regCont">
            <?php include('errors.php'); ?>
            <label class="label" for="nome">Inserisci il nome*</label>
            <input class="input" type="text" name="nome" id="nome" placeholder="Nome" required
                value="<?php echo $nome; ?>">
            <hr>
            <label class="label" for="cognome">Inserisci il cognome*</label>
            <input class="input" type="text" name="cognome" id="cognome" placeholder="Cognome" required
                value="<?php echo $cognome; ?>">
            <hr>
            <label class="label" for="email">Inserisci l'email*</label>
            <input class="input" type="email" name="email" id="email" placeholder="name@example.com" required
                value="<?php echo $email; ?>">
            <hr>
            <label class="label" for="password">Inserisci la password*</label>
            <input class="input" type="password" name="password" id="password" placeholder="Scrivila qua" required >
            <span class="occhio"><i class="fa-solid fa-eye"></i></span>
            <hr>
            <button type="submit" class="button" name="reg_user" id="buttonRegistration">REGISTRATI</button>
            <p>
                Hai già un account? <a href="index.php">Accedi</a>
            </p>
        </form>
	</section>
</main>
<script src="./assets/js/script.js"></script>
</body>

</html>