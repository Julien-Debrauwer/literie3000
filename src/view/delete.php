<?php
class DeleteView
{
    public function __construct(DeleteController $controller) {
        $this->controller = $controller;
        $this->template = DIR_TEMPLATE."delete.php";
    }

    public function render(){
        if (!empty($_POST)) {
            $delete = $this->controller->deleteMattress();
            if($delete){
                header("Location: edit");
            }
            require($this->template);
        }
    }
}