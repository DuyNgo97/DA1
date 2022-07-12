<?php
class db
{
    public $conn;
    protected $host = "103.200.22.212";
    protected $username = "lopchung_admin";
    protected $password = "khiemdeptrai";
    protected $dbname = "lopchung_da1";
    function __construct()
    {
        $this->conn = mysqli_connect($this->host, $this->username, $this->password);
        mysqli_select_db($this->conn, $this->dbname);
        mysqli_query($this->conn, "SET NAMES 'utf8'");
    }
}
