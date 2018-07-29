<?php
Class InventoryBL extends InventoryDL
{
    public function __construct() {
        
    }
    
    public function makeSoldOut() {
        $this->updateInventory($_POST['id']);
    }
    
    public function getInventory() {
        if(isset($_GET['id']) && $_GET['id'] != '') {
            echo json_encode($this->selectInventory($_GET['id'])[0]);
        } else {
            echo json_encode($this->selectAllInventory());
        }        
    }
    
    public function getSoldOutNotification() {
        echo json_encode($this->getSoldOutModels());
    }
        
}