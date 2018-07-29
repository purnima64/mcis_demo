<?php
Class ManufacturerBL extends ManufacturerDL
{
    public function __construct() {
        
    }
    
    public function addManufacturer() {
        echo $this->insertManufacturer(["name"=>  addslashes($_POST["name"])]);
        //Load::view('test',array('test'=>'test'));        
    }
    
    public function getAllManufacturer() {
        echo json_encode($this->selectAllManufacturer());
    }
        
}