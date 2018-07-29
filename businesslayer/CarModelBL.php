<?php
Class CarModelBL extends CarModelDL
{
    public function __construct() {
        
    }
    
    public function getCarModel() {
        Load::view('test',array('test'=>'test'));        
    }
    
    public function addCarModel() {
        $image1 = explode('.', $_FILES['image_file1']['name']);
        $image1 = $image1[0] . "_" . time() . "." . end($image1);
        $image2 = explode('.', $_FILES['image_file2']['name']);
        $image2 = $image2[0] . "_" . time() . "." .end($image2);

        if ( $_FILES['image_file1']['error'] > 0 ){
                echo 'Error: ' . $_FILES['image_file1']['error'] . '<br>';
        } else {
            if(move_uploaded_file($_FILES['image_file1']['tmp_name'], '../images/cars/' . $image1)) {
                //echo "File Uploaded Successfully";
            }
        }

        if ( $_FILES['image_file2']['error'] > 0 ){
            echo 'Error: ' . $_FILES['image_file2']['error'] . '<br>';
        } else {
            if(move_uploaded_file($_FILES['image_file2']['tmp_name'], '../images/cars/' . $image2)) {
                //echo "File Uploaded Successfully";
            }
        }

        $data = [
                    "manufacturer_id" => $_POST["manufacturer_id"],
                    "name" => $_POST["model-name"],
                    "color" => $_POST["model-color"],
                    "year" => $_POST["model-year"],
                    "registration_number" => $_POST["model-reg-no"],
                    "note" => $_POST["model-note"],
                    "quantity" => $_POST["model-count"],
                    "image_url_1" => $image1,
                    "image_url_2" => $image2
                ];
        echo $this->insertCar($data);        
    }
    
    public function markAsSoldOut() {
       echo $this->soldOut($_POST['id']);
        
    }
        
}