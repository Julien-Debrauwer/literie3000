<?php
class AddController
{
    private $model;

    public function __construct(AddModel $model)
    {
        $this->model = $model;
    }

    public function getDataForm() {
        return array(
            "brand" => $this->model->brand,
            "model" => $this->model->model,
            "dimensions" => $this->model->dimensions,
            "img" => $this->model->img,
            "price" => $this->model->price
        );
    }
    public function addMattress() : bool {
    
        $query = $this->model->db->prepare("INSERT INTO mattresses (brand, model, dimensions, img, price) VALUES(:brand, :model, :dimensions, :img, :price)");
        $query->bindParam(":brand", $this->model->brand);
        $query->bindParam(":model", $this->model->model);
        $query->bindParam(":dimensions", $this->model->dimensions);
        $query->bindParam(":img", $this->model->img);
        $query->bindParam(":price", $this->model->price);

        if ($query->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
