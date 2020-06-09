<?php

class DB
{
    private $server = "zj2x67aktl2o6q2n.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    private $user = "rv8kk7ab6a9led76";
    private $pwd = " co5p03pim1xq00me";
    private $database = "s3ykxtpz1s85tbul";
    public $connection;

    /**
     * DB constructor.
     */
    public function __construct()
    {
        $this->connection = new mysqli($this->server, $this->user, $this->pwd, $this->database); //this --> his
        if ($this->connection->connect_error) {
            echo $this->connection->connect_error;
        }
    }
}
