<?php
Class InventoryDL
{
    public function __construct() {
        
    }
    
    public function selectInventory($id) {
        $sql = "SELECT m.id AS id, m.name AS model_name, 
                        mf.name AS manufacturer_name, m.color AS color, m.year,
                        m.registration_number, m.note, m.image_url_1, m.image_url_2,
                        m.quantity AS count 
                        FROM manufacturer mf LEFT JOIN model m ON mf.manufacturer_id = m.manufacturer_id 
                        WHERE m.id = $id";
        $result = DB::select_sql($sql);
        return $result;
    }

    public function selectAllInventory(){
        $sql = "SELECT m.id AS id, m.name AS model_name, 
                        mf.name AS manufacturer_name, 
                        IF(m.quantity = NULL OR m.quantity = '0', 'Sold Out', m.quantity) AS count 
                        FROM model m INNER JOIN manufacturer mf ON mf.manufacturer_id = m.manufacturer_id";
        $result = DB::select_sql($sql);
        return $result;
    }

    public function getSoldOutModels() {

        $sql = "SELECT concat(m.name ,' By ',mf.name) as model
                FROM model m INNER JOIN manufacturer mf ON mf.manufacturer_id = m.manufacturer_id
                WHERE TIMESTAMPDIFF(Hour,m.updated_date,now())<=24 and (m.quantity = NULL OR m.quantity = '0')
                ORDER BY m.updated_date desc
                limit 0,3";
        $result = DB::select_sql($sql);
        
        return $result;
    } 
   
        
}