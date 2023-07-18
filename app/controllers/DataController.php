<?php
require_once "../models/DataDAO.php";

// class DataController {
//     private $dataDAO;

//     public function __construct() {
//         $this->dataDAO = new DataDAO();
//     }

//     public function getAllData() {
//         $data = $this->dataDAO->getAllData();
//         $jsonData = json_encode($data);
    
//         header("Content-Type: application/json");
//         return $jsonData;
//     }
    
//     public function getDataById($id) {
//         $data = $this->dataDAO->getDataById($id);
//         $jsonData = json_encode($data);
    
//         header("Content-Type: application/json");
//         return $jsonData;
//     }

//     public function createData($nombre, $telefono, $correo) {
//         $this->dataDAO->createData($nombre, $telefono, $correo);
//     }

//     public function updateData($id, $nombre, $telefono, $correo) {
//         $this->dataDAO->updateData($id, $nombre, $telefono, $correo);
//     }

//     public function deleteData($id) {
//         $this->dataDAO->deleteData($id);
//     }
// }
class DataController
{
    public function index()
    {
        $dataDAO = new DataDAO();
        $data = $dataDAO->getAllData();

        header('Content-Type: application/json');
        echo json_encode($data);
    }
}

