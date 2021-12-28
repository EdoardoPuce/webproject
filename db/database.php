<?php
class DatabaseHelper
{
    private $db;

    public function __construct($servername, $username, $password, $dbname, $port)
    {
        $this->db = new mysqli($servername, $username, $password, $dbname, $port);
        if ($this->db->connect_error) {
            die("Connection failed: " . $this->db->connect_error);
        }
    }

    public function getArticoli()
    {
        $stmt = $this->db->prepare("SELECT idArticolo, nomeArticolo, descrizione, taglia, prezzo, imgArticolo, qtaMagazzino, categoria, rivenditore FROM articolo ");
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getCategorie()
    {
        $stmt = $this->db->prepare("SELECT idCategoria, nomeCategoria FROM categoria");
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getArticoliByCategoria($idcategoria)
    {
        $query = "SELECT idArticolo, nomeArticolo, descrizione, taglia, prezzo, imgArticolo, qtaMagazzino, categoria, rivenditore FROM articolo, categoria WHERE articolo.categoria = categoria.idcategoria 
        AND articolo.categoria = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('i', $idcategoria);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getArticoliByCategoriaEPrezzo($idcategoria, $prezzo)
    {
        if ($prezzo == 1) {
            $min = 0;
            $max = 15;
        } else if ($prezzo == 2) {
            $min = 16;
            $max = 50;
        } else if ($prezzo == 3) {
            $min = 51;
            $max = 4294967295;
        } else {
            $min = 0;
            $max = 4294967295;
        }
        $query = "SELECT idArticolo, nomeArticolo, descrizione, taglia, prezzo, imgArticolo, qtaMagazzino, categoria, rivenditore FROM articolo, categoria WHERE articolo.categoria = categoria.idcategoria 
        AND articolo.prezzo BETWEEN ? AND ? ";

        if ($idcategoria != -1) {
            $query = $query . "AND articolo.categoria = ?";
            $stmt = $this->db->prepare($query);
            $stmt->bind_param('iii', $min, $max, $idcategoria);
            $stmt->execute();
            $result = $stmt->get_result();
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            $stmt = $this->db->prepare($query);
            $stmt->bind_param('ii', $min, $max);
            $stmt->execute();
            $result = $stmt->get_result();
            return $result->fetch_all(MYSQLI_ASSOC);
        }
    }

    public function getArticoliByRicerca($ricerca)
    {
        $articoli = $this->getArticoli();
        $ricerca = strtolower($ricerca);
        $result = array();
        foreach ($articoli as $articolo) {
            $nome = strtolower($articolo["nomeArticolo"]);
            if (substr_count($nome, $ricerca) > 0) {
                array_push($result, $articolo);
            }
        }
        return $result;
    }

    public function getCategoriaById($idcategoria)
    {
        $query = "SELECT nomeCategoria FROM categoria WHERE idCategoria = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('i', $idcategoria);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getArticoloByid($idarticolo){
        $query = "SELECT idArticolo, nomeArticolo, descrizione, taglia, prezzo, imgArticolo, qtaMagazzino, categoria, rivenditore FROM articolo WHERE idArticolo = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("i", $idarticolo);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result ->fetch_all(MYSQLI_ASSOC);

    }
}
