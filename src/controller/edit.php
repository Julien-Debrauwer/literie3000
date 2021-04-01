<?php
class EditController
{
    private $model;

    public function __construct(EditModel $model)
    {
        $this->model = $model;
    }

    public function getMattresses()
    {
        $query = $this->model->db->query("SELECT * FROM mattresses");
        $mattresses = $query->fetchAll();
        return $mattresses;
    }
}
