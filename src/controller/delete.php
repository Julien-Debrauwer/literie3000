<?php
class DeleteController
{
    private $model;

    public function __construct(DeleteModel $model)
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
