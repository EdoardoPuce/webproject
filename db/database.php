<?php
class DatabaseHelper{
    private $db;

    public function __construct($servername, $username, $password, $dbname, $port){
        $this->db = new mysqli($servername, $username, $password, $dbname, $port);
        if ($this->db->connect_error) {
            die("Connection failed: " . $this->db->connect_error);
        }        
    }

    public function getArticoli(){
        
        $stmt = $this->db->prepare("SELECT idArticolo, nomeArticolo, descrizione, taglia, prezzo, imgArticolo, qtaMagazzino, categoria, rivenditore FROM articolo ");
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
?>