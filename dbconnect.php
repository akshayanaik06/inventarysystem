<?php
 class Dbconnection
 {
    public $oCon;
    public $oDB;
    public $sqlquery;
    public $result;


    public function __construct()
    {
        $server = 'localhost';
        $user = 'id6563220_balveautomobiles';
        $password = 'automobiles123';
        $database = 'id6563220_car_inventary';
        $this->oCon = mysqli_connect($server,$user,$password) or die("No connection".mysqli_connect_error());
        $this->oDB = mysqli_select_db($this->oCon,$database) or die('No databse connected');
    }

    public function execQuery($query)
    {
        $this->sqlquery = $query;
        $this->result = mysqli_query($this->oCon,$this->$sqlquery) or die("Error in query");
    }

    public function freeMemory()
    {
        return mysqli_free_result($this->result);

    }

    public function closeconn()
    {
        return mysqli_close($this->oCon);
    }
 }


?>