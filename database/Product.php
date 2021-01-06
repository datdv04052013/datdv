<?php

// dung de lay du lieu
 class Product
{
    public $db= null;

    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this->db=$db;
    }



    //ham lay du lieu
    public function getData($table='product'){
        $result = $this->db->con->query("SELECT * FROM ($table)");

        $resultArray = array();

        //lay tung sp 1
        while( $item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }
        return $resultArray;
    }
}