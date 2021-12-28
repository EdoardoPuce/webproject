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

    public function getCategorie(){
        $stmt = $this->db->prepare("SELECT idCategoria, nomeCategoria FROM categoria");
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getArticoliByCategoria($idcategoria){
        $query = "SELECT idArticolo, nomeArticolo, descrizione, taglia, prezzo, imgArticolo, qtaMagazzino, categoria, rivenditore FROM articolo, categoria WHERE articolo.categoria = categoria.idcategoria 
        AND articolo.categoria = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('i', $idcategoria);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getCategoriaById($idcategoria){
        $query = "SELECT nomeCategoria FROM categoria WHERE idCategoria = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('i', $idcategoria);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
?>