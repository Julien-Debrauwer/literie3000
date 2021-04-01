<?php
class EditView
{
    public function __construct(EditController $controller) {
        $this->controller = $controller;
        $this->template = DIR_TEMPLATE."edit.php";
    }

    public function render(){
        $mattresses = $this->controller->getMattresses();
        require($this->template);
    }
}