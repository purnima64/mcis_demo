<?php
Class ManufacturerDL extends DB
{
    private $table = 'manufacturer';
    
    public function __construct() {
        
    }
    
    public function selectAllManufacturer(){
        $result = DB::select($this->table, ["manufacturer_id", "name"]);
        return $result;
    }

    public function insertManufacturer($columns = []) {

        $result = DB::select($this->table, ["name"], "name = '$columns[name]'");
        
        if(count($result) > 0) {
            return "duplicate";
        }

        $result = DB::insert($this->table, $columns);
        if($result) {
            return "success";
        } else {
            return "failure";
        }
    }
}