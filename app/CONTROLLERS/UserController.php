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
            'title' => 'Lista de Usuarios',
            'users' => $users
        ]);
    }

    public function create(){
        
    }

    public function show(){
        return $this->view('user_show', [
            'title' => 'Editar Usuario',

        ]);
    }

    public function edit(){
        
    }
}