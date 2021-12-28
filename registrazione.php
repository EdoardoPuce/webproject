<?php
require_once 'bootstrap.php';

if(isset($_POST['registrazione']){
    $nome = $_POST['nome'] ?? '';
    $cognome = $_POST['cognome'] ?? '';
    $indirizzo = $_POST['indirizzo'] ?? '';
    $civico = $_POST['civico'] ?? '';
    $città = $_POST['città'] ?? '';
    $cap = $_POST['cap'] ?? '';
    $telefono = $_POST['telefono'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $conferma_password = $_POST['conferma_password'] ?? '';

$lungPassword = mb_strlen($password);

if(empty($nome) || empty($cognome) || empty($indirizzo) || empty($civico) || empty($città)|| empty($cap) || empty($telefono) || empty($email) || empty($password) || empty($conferma_password){
    $msg= 'Compila tutti i campi';
}elseif($lungPassword < 8 || $lungPassword > 20) {
    $msg = 'Lunghezza minima password 8 caratteri.Lunghezza massima 20 caratteri';
}elseif($password =! 'confermaPassword') {
    $msg= ' Si utilizzi la stessa password!'
}
else{
    $password_hash = password_hash($password, PASSWORD_BCRYPT);

    $query= "
    SELECT id
    FROM cliente
    WHERE username = :username
    ";

$check = $pdo->prepare($query);
$check->bindParam(':username', $username, PDO::PARAM_STR);
$check->execute();
        
$user = $check->fetchAll(PDO::FETCH_ASSOC);
}
   

if (count($user) > 0) {
    $msg = 'Username già in uso';
}
else{
  $query = "
  INSERT INTO cliente
  VALUES (0, :nome, :cognome, :indirizzo, :civico, :città, :cap, :telefono, :email, :password)
            ";

 $check = $pdo->prepare($query);
 $check->bindParam(':username', $username, PDO::PARAM_STR);
 $check->bindParam(':password', $password_hash, PDO::PARAM_STR);
 $check->execute();
            
}
}
