<?php

class CarModelDL {
    private $table = 'model';

    public function selectCar() {

    }
    public function selectAllCar(){
        $result = DB::select($this->table);
        return $result;
    }

    public function insertCar($columns = []) {

        $result = DB::insert($this->table, $columns);
        if($result) {
            return "success";
        } else {
            return "failure";
        }
    }

    public function soldOut($id) {
        $result = DB::update($this->table, ["quantity" => 0], "id = $id");
        if($result) {
            return "success";
        } else {
            return "failure";
        }
    }
}