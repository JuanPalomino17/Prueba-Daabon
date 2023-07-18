<?php
require_once "DatabaseConnection.php";

// class DataDAO {
//     private $connection;

//     public function __construct() {
//         $dbConnection = DatabaseConnection::getInstance();
//         $this->connection = $dbConnection->getConnection();
//     }

//     public function getAllData() {
//         $query = "SELECT * FROM usuarios";
//         $statement = $this->connection->prepare($query);
//         $statement->execute();
//         $result = $statement->fetchAll(PDO::FETCH_ASSOC);

//         return $result;
//     }

//     public function getDataById($id) {
//         $query = "SELECT * FROM usuarios WHERE id = :id";
//         $statement = $this->connection->prepare($query);
//         $statement->bindParam(":id", $id);
//         $statement->execute();
//         $result = $statement->fetch(PDO::FETCH_ASSOC);

//         return $result;
//     }

//     public function createData($campo1, $campo2, $campo3) {
//         $query = "INSERT INTO usuarios (nombre, telefono, correo) VALUES (:nombre, :telefono, :correo)";
//         $statement = $this->connection->prepare($query);
//         $statement->bindParam(":nombre", $nombre);
//         $statement->bindParam(":telefono", $telefono);
//         $statement->bindParam(":correo", $correo);
//         $statement->execute();
//     }

//     public function updateData($id, $nombre, $telefono, $correo) {
//         $query = "UPDATE usuarios SET nombre = :nombre, telefono = :telefono, correo = :correo WHERE id = :id";
//         $statement = $this->connection->prepare($query);
//         $statement->bindParam(":id", $id);
//         $statement->bindParam(":nombre", $nombre);
//         $statement->bindParam(":telefono", $telefono);
//         $statement->bindParam(":correo", $correo);
//         $statement->execute();
//     }

//     public function deleteData($id) {
//         $query = "DELETE FROM usuarios WHERE id = :id";
//         $statement = $this->connection->prepare($query);
//         $statement->bindParam(":id", $id);
//         $statement->execute();
//     }
// }
class DataDAO
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance()->getConnection();
    }

    public function getAllData()
    {
        $query = $this->db->query('SELECT * FROM usuarios');
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
