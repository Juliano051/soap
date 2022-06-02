<?php

class conn
{
    private $con;

    public function __construct()
    {
        $this->con = (is_null($this->con) ? self::connect() : $this->con);
    }

    static function connect()
    {
        $con = mysqli_connect('localhost', 'root', '');
        $db = mysqli_select_db($con, 'soap');
        return $con;
    }

    public function getNome($id_array)
    {
        $id = $id_array['id'];
        $sql = "select * from usuario WHERE id = '$id'";
        $qry = mysqli_query($this->con, $sql);
        $res = mysqli_fetch_array($qry);
        return $res['nome'];
    }
}

$conn = new conn;
