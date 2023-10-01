<?php 

namespace App\Controllers;

class Controller{
    public function view($route){
        $route = str_replace('.', '/', $route);


        if(file_exists("../app/VIEWS/{$route}.php")){
            ob_start();
            include "../app/VIEWS/{$route}.php";
            $content = ob_get_clean();

            return $content;
        }else{
            return "La ruta no existe";
        }
    }
}