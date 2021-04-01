<?php
class DeleteModel
{
    public function __construct($db){
        $this->db = $db;
        var_dump($_POST);
        if (!empty($_POST)) {
            echo $_POST["id"];
            // $this->id = trim(strip_tags($_POST[$mattress["id"]]));
        }else{
            echo "SALUT";
        }
    }
}