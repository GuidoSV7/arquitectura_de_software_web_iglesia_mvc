<?php 

namespace App\Controllers;

use App\Models\User;

class RegisterController extends Controller
{
    public function register(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            
            $userModel = new User();

            $userPOST= $_POST;

            $userBD = $userModel->findbyname($userPOST['name']);

            //Verificar si el usuario se encuentra en la base de datos
            if($userBD != null){
                var_dump("El usuario se encuentra");            

               //Verificar si las credenciales son correctas

               if(password_verify($userPOST['password'], $userBD['password'])){

                return $this->view('dashboard');
               }

               var_dump("Credenciales Incorrectas");
               
            }else{
                var_dump("No hay en la BD");
            }
                
            

            

          

            
        }


        return $this->view('register');
    }
}