<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once '../library/autoload.php';
switch($_REQUEST['mode'])
{
    case 'addManufacturer':
        $manufacturerObject = new ManufacturerBL();
        $manufacturerObject->addManufacturer();
        break;
    case 'getManufacturers':
        $manufacturerObject = new ManufacturerBL();
        $manufacturerObject->getAllManufacturer();
        break;
    case 'addCarModel':
        $carModelObject = new CarModelBL();
        $carModelObject->addCarModel();
        break;
    case 'getInventory':
        $inventoryObject = new InventoryBL();
        $inventoryObject->getInventory();
        break;
    case 'markSold':
        $carModelObject = new CarModelBL();
        $carModelObject->markAsSoldOut();
        break;
    case 'soldNotification':
        $inventoryObject = new InventoryBL();
        $inventoryObject->getSoldOutNotification();
        break;
    default :
        break;
}
exit;
?>

