<?php
//User: stefa
//connessione al db mysqli con gestione errore
$conn = mysqli_connect("172.17.0.1:3306", "root", "pw", "mydb") or die("Errore di connessione: " . mysqli_connect_error());

header("Access-Control-Allow-Methods: POST");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
header("Access-Control-Max-Age: 3600");


//ex per il data provide
$data = ['id' => 10001, 'birthDate' => "2001-10-02", 'firstName' => 'Jhon', 'lastName' => 'Dorian', 'gender' => 'M', 'hireDate' => '2012-07-02'];

//metodi di richiesta enclouder (post, put, get, delete)
if ($_SERVER['REQUEST_METHOD'] === 'GET') 
{
    echo json_encode($data);

    $sql = "SELECT * from employees";
    $result = $conn->query($sql);
    
} 
    else if ($_SERVER['REQUEST_METHOD'] === 'POST') 
    {
        echo json_encode($data);
    } 
    else if ($_SERVER['REQUEST_METHOD'] === 'PUT') 
    {
        echo json_encode($data);
    }
    else if ($_SERVER['REQUEST_METHOD'] === 'DELETE') 
    {
        echo json_encode($data);
    } 
    //echo $sql.
    