<?php 

namespace App\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index(){

        $userModel = new User;
        $users = $userModel->all();

        // return $contactModel->all();
        //   return $userModel->findbyname("Usuario 1"); //Cuidado los nombres en la BD tienen espacios

        // return $userModel->delete(11);

        return $this->view('users_list', [
            'title' => 'Lista de usuarios',
            'users' => $users

        ]);
    }

    public function create(){
        return "Hola desde el create";
    }

    public function show($id){

        $userModel = new User;
        $user = $userModel->find($id);

        // var_dump($userModel->rolbyid_rol($user['id_rol']));
        $rol = $userModel->rolbyid_rol($user['id_rol']);
        
        return $this->view('user_show', [
            'title' => 'Editar Usuario',
             'user' => $user,
                'rol' => $rol
            

        ]);

        
    }

    public function edit($id){
        return "hola desde el edit";
    }
}