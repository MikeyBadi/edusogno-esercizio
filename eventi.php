<?php
    include('./dbConnection.php')

?>
<!DOCTYPE html>
<html>

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
        <a href="logout.php" class="logOut">Logout</a>
    </header>
    <main class="container">
            <?php if (isset($_SESSION['success'])): ?>       
                <div class="containerEventi">
                    <h2>Ciao <?= $name[0]['nome']; ?> <?= $name[0]['cognome']; ?>, ecco i tuoi eventi</h2>
                        <div id="eventi">
                            <?php if (count($events) > 0): ?>
                            <?php foreach ($events as $event): ?>
                                <div class="evento">
                                    <h3><?= $event['nome_evento'] ?></h3>
                                    <div><?= $event['data_evento'] ?></div>
                                    <button name="join" class="button">JOIN</button>
                                </div>
                            <?php endforeach; ?>
                            <?php else: ?>
                            <h3>Non hai eventi</h3>
                            <?php endif; ?>
                        </div>
                </div>
            <?php endif ?>     
    </main>
</body>
</html>