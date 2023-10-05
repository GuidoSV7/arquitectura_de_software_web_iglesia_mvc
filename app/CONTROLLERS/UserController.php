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

    public function show(){
        // return $this->view('user_show', [
        //     'title' => 'Editar Usuario',

        // ]);

        return "hola desde el show";
    }

    public function edit(){
        
    }
}