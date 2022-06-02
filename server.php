<?php
include './conn.php';
class server
{
    private $conn;
    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function getNome($id_array)
    {
        return $this->conn->getNome($id_array);
    }

    public function getConn()
    {
        var_dump($this->conn);
    }
}

$params = array('uri' => 'localhost/soap/server.php');

$server = new SoapServer(null, $params);
$server->setClass("server", $conn);
$server->handle();

$conn = new server($conn);
