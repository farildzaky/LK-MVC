<?php

class Model {

protected $db;

public function __construct(){
    $this->db = new DB();
    $this->db->connect(DB_DRIVER,DB_HOST,DB_USER,DB_PASS,DB_NAME);
   



}

// protected function query($sql, $params = []) {
//     $stmt = $this->db->prepare($sql);
//     if ($params) {
//         foreach ($params as $key => $value) {
//             $stmt->bindParam($key, $value);
//         }
//     }
//     $stmt->execute();
//     return $stmt;
// }

// protected function fetchAll($sql, $params = []) {
//     $stmt = $this->query($sql, $params);
//     return $stmt->fetchAll(PDO::FETCH_ASSOC);
// }


// protected function fetch($sql, $params = []) {
//     $stmt = $this->query($sql, $params);
//     return $stmt->fetch(PDO::FETCH_ASSOC);
// }
}