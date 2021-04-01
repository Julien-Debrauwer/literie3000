<?php
class DeleteController
{
    private $model;

    public function __construct(DeleteModel $model)
    {
        $this->model = $model;
    }

    public function deleteMattress()
    {
        $query = $this->model->db->query("DELETE FROM mattresses WHERE id = :id");
        $query->bindParam(":id", $this->model->id);
        $mattresses = $query->fetchAll();
        return $mattresses;
    }
}
