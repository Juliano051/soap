<?php

class client
{
    private $instance;
    public function __construct()
    {
        $params = array('location' => 'http://localhost/soap/server.php', 'uri' => 'urn://localhost/soap/server.php', 'trace' => 1);
        $this->instance = new SoapClient(null, $params);
    }

    public function getNome($id_array)
    {

        return $this->instance->__soapCall('getNome', $id_array);
    }

    public function getConn()
    {

        return $this->instance->__soapCall('getConn', []);
    }
}

$client = new client;
