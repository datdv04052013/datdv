<?php


class DBController
{
    //database connection
    protected $host = 'localhost';
    protected  $user ='root';
    protected  $password = '';
    protected $database="shoplaptop";

    //connection properties
    public $con =  null;

    //call constructor
    public function __construct()
    {
        $this->con= mysqli_connect($this->host, $this->user, $this->password, $this->database);
        if ($this->con->connect_error)
        {
            echo "Connection Failed !!!";
        }
        echo "";
    }

    public function __destruct()
    {
        $this->closeConnection();
    }
    //closing database
    protected function closeConnection(){
        if($this->con != null){
            $this->con->close();
            $this->con=null;
        }
    }
}


