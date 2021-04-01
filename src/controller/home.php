<?php
class HomeController
{
    private $model;

    public function __construct(HomeModel $model)
    {
        $this->model = $model;
    }

    public function getMattresses()
    {
        // Récupération des clubs
        $query = $this->model->db->query("SELECT * FROM mattresses");
        $mattresses = $query->fetchAll();
        return $mattresses;
    }
}
