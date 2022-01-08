<?php
require_once 'bootstrap.php';

f(isset($_POST['submit'])){
    $nome = $_POST['nome'];
    $cognome = $_POST['cognome'];
    $piva = $POST['piva'];
    $paese = $POST['paese'];
    $città = $_POST['città'];
    $indirizzo = $_POST['indirizzo'];
    $civico = $_POST['civico'];
    $cap = $_POST['cap'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $conferma_password = $_POST['conferma_password'];

    $lungPassword = mb_strlen($password); //per confrontare password in seguito

    

    if (isset($_POST["utente"]) && $_POST['utente'] == "1"){



    $user = $dbh->checkEmail($email);

    if(count($user) > 0) {
        echo '<script>alert("Email già esistente!")</script>';
    } 
    else {



    }
/*
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
    
    if(isset($nome) || isset($cognome) || isset($indirizzo) || isset($civico) || isset($città)|| isset($cap) || isset($email) || isset($password) || isset($conferma_password){
        
        if($lungPassword > 8 || $lungPassword < 20) {
            
            if(strcmp ($password,$conferma_password)))== 0 {
                $msg= ' Password inserita correttamente';

                $password_hash = password_hash($password, PASSWORD_BCRYPT);

                $query= "SELECT idCliente
                         FROM cliente
                         WHERE username = $username
                         ";
                
                $stmt = $this->db->prepare($query);
                $stmt->bind_param('username', $username);
                $stmt->execute();
                $result = $stmt->get_result();
   
                $user = $result->fetch_all(MYSQLI_ASSOC);

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

            }else { 
            $msg = 'Lunghezza minima password 8 caratteri.Lunghezza massima 20 caratteri';
            }

        }else {
        $msg= ' Si utilizzi la stessa password!';
        } 

    else{
        $msg= 'Compila tutti i campi';
    }

}

require 'template/base.php';
?>
                    
*/