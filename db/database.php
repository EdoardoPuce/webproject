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

    public function getPersonaById($id, $i = 1)
    {
        if($i==1){
            $query = "SELECT idCliente, nome, cognome, email, 'password', paese, citta, indirizzo, civico, cap FROM cliente WHERE idCliente = ?";
        } else {
            $query = "SELECT idRivenditore, nome, cognome, email, 'password', piva, citta, indirizzo, civico, cap FROM rivenditore WHERE idRivenditore = ?";
        }
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('s', $id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getOrderByClient($idCliente)
    {
        $query = "SELECT r.idOrdine, r.idArticolo, r.qta
        FROM ordine o, rigaordine r
        where o.idOrdine = r.idOrdine
        and o.idCliente = ?
        group by r.idOrdine";

        $stmt = $this->db->prepare($query);
        $stmt->bind_param('i', $idCliente);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
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

    public function getCategoriaByName($nameCategoria)
    {
        $query = "SELECT idCategoria FROM categoria WHERE nomeCategoria = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('s', $nameCategoria);
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

    public function getArticoloByRivenditore($idrivenditore){
        $query = "SELECT idArticolo, nomeArticolo, descrizione, taglia, prezzo, imgArticolo, qtaMagazzino, categoria, rivenditore FROM articolo WHERE rivenditore = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("i", $idrivenditore);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result ->fetch_all(MYSQLI_ASSOC);

    }

    public function checkLogin($email, $password){
        $query = "SELECT idCliente, email, nome FROM cliente WHERE email = ? AND password = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('ss',$email, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getOrderById($idordine){
        $query = "SELECT r.idOrdine, r.idArticolo, r.qta
        FROM ordine o, rigaordine r
        where o.idOrdine = r.idOrdine
        and r.idOrdine = ?";

        $stmt = $this->db->prepare($query);
        $stmt->bind_param('i', $idordine);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getStatoByOrderId($idordine){
        $query = "SELECT stato
        FROM ordine
        where idOrdine = ?";

        $stmt = $this->db->prepare($query);
        $stmt->bind_param('i', $idordine);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getRandomArticoli($n=3){
        $query = "SELECT idArticolo, nomeArticolo, imgArticolo, prezzo
        FROM articolo
        ORDER BY RAND()
        LIMIT ?";
        
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('i', $n);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function insertOrder($idCliente){
        $query = "INSERT INTO `ordine`(`idCliente`, `stato`) VALUES (?,'0')";
        
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('i', $idCliente);
        $stmt->execute();
    }

    public function insertOrderRow($qta,$idArticolo,$idOrdine){
        $query = "INSERT INTO `rigaordine`(`qta`, `idArticolo`, `idOrdine`) VALUES (?,?,?)";
        
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('iii', $qta,$idArticolo,$idOrdine);
        $stmt->execute();
    }

    public function lastOrderId(){
        $query = "SELECT max(idOrdine) FROM `ordine`";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    public function modificaArticolo($idArticolo, $modifiche){  
        $query = "UPDATE articolo SET nomeArticolo = ? , descrizione = ? , taglia = ? , prezzo = ? , imgArticolo = ? , qtaMagazzino = ? , categoria = ? WHERE idArticolo = ? ";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("sssdsiii", $modifiche[0], $modifiche[1], $modifiche[2], $modifiche[3], $modifiche[4], $modifiche[5], $modifiche[6], $idArticolo);  

        if(!$stmt->execute()){
            var_dump($stmt->error);
        }
    }

    public function aggiungiArticolo($articolo){     
        $query = "INSERT INTO articolo (nomeArticolo, descrizione, taglia, prezzo, imgArticolo, qtaMagazzino, categoria, rivenditore) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("sssdsiii", $articolo[0] /*nome*/, $articolo[1]/*descrizione*/, $articolo[2]/*taglia*/,$articolo[3]/*prezzo*/,$articolo[4]/*img*/, $articolo[5]/*qta*/, $articolo[6]/*categoria*/, $articolo[7]/*rivenditore*/ );

        if(!$stmt->execute()){
            var_dump($stmt->error);
        }
    }
    
}
