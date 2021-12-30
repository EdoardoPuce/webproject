<?php
require_once 'bootstrap.php';

if(isset($_POST['registrazione-form'])){
    $nome = $_POST['nome'];
    $cognome = $_POST['cognome'];
    $indirizzo = $_POST['indirizzo'];
    $civico = $_POST['civico'];
    $città = $_POST['città'];
    $cap = $_POST['cap'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $conferma_password = $_POST['conferma_password'];
    
    $lungPassword = mb_strlen($password);
    
    if(empty($nome) || empty($cognome) || empty($indirizzo) || empty($civico) || empty($città)|| empty($cap) || empty($email) || empty($password) || empty($conferma_password){
        $msg= 'Compila tutti i campi';
    }elseif($lungPassword < 8 || $lungPassword > 20) {
    $msg = 'Lunghezza minima password 8 caratteri.Lunghezza massima 20 caratteri';
    }elseif(if(strcmp ($password,$conferma_password)))== 0 {
        $msg= ' Password inserita correttamente';
    } else {
        $msg= ' Si utilizzi la stessa password!';
    }
    else{
    $password_hash = password_hash($password, PASSWORD_BCRYPT);

    $query= "
    SELECT idCliente
    FROM cliente
    WHERE username = $username
    ";

    $stmt = $this->db->prepare($query);
    $stmt->bind_param('username', $username);
    $stmt->execute();
    $result = $stmt->get_result();
   
    $user = $result->fetch_all(MYSQLI_ASSOC);
}
 
    if (count($user) > 0) {
    $msg = 'Username già in uso';
    }
    else {
        $query = "INSERT INTO cliente(nome, cognome, indirizzo, civico, città, cap, email, password)
                  VALUES ('$nome', '$cognome', '$indirizzo', '$civico', '$città', '$cap', '$email', '$password')
                  ";
                   
            $stmt = $this->db->prepare($query);
            $stmt->bind_param('username', $username);
            $stmt->execute();           
}
}
require 'template/base.php';
?>
