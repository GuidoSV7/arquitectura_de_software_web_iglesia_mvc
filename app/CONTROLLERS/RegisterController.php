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
            if(is_null($userBD)){

                //Verificar que password y confirm_password sean iguales

                if($userPOST['password'] == $userPOST['confirm_password']){


                     //Verificar que no falte llenar datos (Validaciones)

                    $userModel->create([
                        'name' => $userPOST['name'],
                        'password' =>  password_hash($userPOST['password'],PASSWORD_BCRYPT ) ,
                        'phone_number' => null,
                        'token' => 'Token de Prueb',
                        'id_rol' => '1',
                    ]);

                    return $this->view('dashboard');

                    
                }
                
                var_dump('No son iguales');

               

               

               
            }else{
                var_dump("Ya estás registrado");
            }
         
        }


        return $this->view('register');
    }
}