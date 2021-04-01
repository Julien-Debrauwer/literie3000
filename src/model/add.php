<?php
class AddModel
{
    public function __construct($db){
        $this->db = $db;
        if (!empty($_POST)) {
            $this->brand = trim(strip_tags($_POST['brand']));
            $this->model = trim(strip_tags($_POST['model']));
            $this->dimensions = trim(strip_tags($_POST['dimensions']));
            $this->img = trim(strip_tags($_POST['img']));
            $this->price = trim(strip_tags($_POST['price']));
        }
    }
}