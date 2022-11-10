<?php
session_start();


// DB CONNECTION AND ERROR CATCHER
if(!$db = mysqli_connect('localhost', 'root', 'root', 'Edusogno')){
  die("Error 500 Establishing a Database Connection");
};


//VARIABLES USED FOR QUERIES
$nome = "";
$cognome = "";
$email    = "";
$errors = array(); 


// LOGIN
  // TAKING DATA FROM DB
  if (isset($_POST['login_user'])) {
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    // ERROR IF EMPTY EMAIL
    if (empty($email)) {
        array_push($errors, "La Email è richiesta");
    }
    // ERROR IF EMPTY PASSWORD
    if (empty($password)) {
        array_push($errors, "La Password è richiesta");
    }
    // DATA COMPARING
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM utenti WHERE email='$email' AND password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) === 1) {
            $_SESSION['email'] = $email;
            $_SESSION['success'] = "Sei loggato";
            header('location: eventi.php');
        }else {
            array_push($errors, "Email o Password errati");
        }
    }
  }

//EVENTS

$email = isset($_SESSION['email']) ? $_SESSION['email'] : '';
$query = "SELECT * FROM `eventi` WHERE `attendees` LIKE '%$email%'";
if ($db->error) {
    error_log('Errore: ' , $db->error);
}
$result = mysqli_query($db, $query);
$events = $result->fetch_all(MYSQLI_ASSOC);
$queryName = "SELECT * FROM utenti WHERE email='$email'";
$resultName = mysqli_query($db, $queryName);
$name = $resultName->fetch_all(MYSQLI_ASSOC);





// REGISTRATION
  // USER REGISTRATION INFO
  if (isset($_POST['reg_user'])) {
    $nome = mysqli_real_escape_string($db, $_POST['nome']);
    $cognome = mysqli_real_escape_string($db, $_POST['cognome']);

    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    
    // EXISTING USER CATCHER
    if ($user) {
      if ($user['email'] === $email) {
        array_push($errors, "La Email è già registrata");
      }
    }

    // EMPTY ERRORS CATCHER
    if (empty($password)) { array_push($errors, "La Password è richiesto"); }
    if (empty($email)) { array_push($errors, "La Email è richiesta"); }
    if (empty($cognome)) { array_push($errors, "Il cognome è richiesto"); }
    if (empty($nome)) { array_push($errors, "Il nome è richiesto"); }
    

    // USER SAVED + REDIRECT
    $user_query = "SELECT * FROM utenti WHERE email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_query);
    $user = mysqli_fetch_assoc($result);

    if (count($errors) == 0) {
      $password = md5($password);
      $query = "INSERT INTO utenti (nome, cognome, email, password) VALUES('$nome','$cognome', '$email', '$password')";
      mysqli_query($db, $query);
      $_SESSION['email'] = $email;
      $_SESSION['success'] = "Sei loggato";
      header('location: eventi.php');
    }
  }
?>