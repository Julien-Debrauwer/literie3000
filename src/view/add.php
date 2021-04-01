<?php
class AddView
{
    public function __construct(AddController $controller) {
        $this->controller = $controller;
        $this->template = DIR_TEMPLATE."add.php";
    }

    public function render(){
        $message = "";
        if (!empty($_POST)) {
            $mattress = $this->controller->getDataForm();

            if (empty($errors)) {
                if ($this->controller->addMattress()){
                    header("Location: home");
                } else {
                    $message = "Erreur de bdd";
                }
            } else {
                $message = "<div class=\"alert alert-danger\">{$errors["message"]}</div>";
            }
        }
        
        require($this->template);
    }
}