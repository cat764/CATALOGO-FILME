<?php

// class Database{
//     private $host;
//     private $user;
//     private $password;
//     private $db;
//     private $port;
//     private $conn;

//     // Responsavel por instanciar um objeto no DataBase
//     public function __construct($host, $user, $password, $db, $port){
//         $this->host = $host;
//         $this->user = $user;
//         $this->password = $password;
//         $this->db = $db;
//         $this->port = $port;
//     }

//     // Responsavel por criar a conexao com o Database
//     public function create_connect(): PDO{
//         $connUrl = "mysql:host=$this->port;dbname=$this->db;charset=utf8mb4";
//         $options = [
//             PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
//             PDO::ATTR_DEFAULT_FETCH_MODE,
//             PDO::ATTR_EMULATE_PREPARES => false,
//         ];

//         $this->conn = new PDO($connUrl, $this->user, $this->password, $options);

//         return $this->conn;

//     }
// }

// $database = new Database(
//     host:"localhost",
//     user:"root",
//     password:"",
//     db:"filmedb",
//     port:3306
    
// );

// // estabelece conexao com o banco
// $database->create_connect();


$host = "localhost";
$port = "3306";
$dbName = "filmesdb";
$user = "root";
$pass = "";

$connUrl = "mysql:host=$host;port=$port;dbname=$dbName;charset=utf8mb4";

$pdo = new PDO($connUrl, $user, $pass);


?>