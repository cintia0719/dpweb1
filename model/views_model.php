<?php
class viewModel{
    protected static function get_view($view){
<<<<<<< Updated upstream
        $white_list = ["home", "products", "users", "new-user", "edit-user","categories", "new-category", "edit-category", "edit-product", "new-product"];
=======
        $white_list = ["home", "products", "users", "new-user", "edit-user", "categories", "edit-products", "edit-categories"];
>>>>>>> Stashed changes
        if (in_array($view, $white_list)) {
            if (is_file("./view/".$view.".php")) {
                $content = "./view/".$view.".php";
            }else{
                $content = "404";
            }
        }elseif($view == "login"){ 
            $content = "login";
        }else{
            $content = "404";
        }
         return $content;
    }
}
