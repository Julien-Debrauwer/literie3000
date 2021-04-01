<?php
class DeleteView
{
    public function __construct(DeleteController $controller) {
        $this->controller = $controller;
        $this->template = DIR_TEMPLATE."delete.php";
    }

    public function render(){
        $mattresses = $this->controller->getMattresses();
        require($this->template);
    }
}