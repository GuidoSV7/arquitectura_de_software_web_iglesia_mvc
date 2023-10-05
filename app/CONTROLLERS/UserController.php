<?php 

namespace App\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index(){

        $usertModel = new User;

        // return $contactModel->all();
        //  return $contactModel->findbyname("Usuario 1"); Cuidado los nombres en la BD tienen espacios

        return $usertModel->delete(11);

        return $this->view('users_list', [
            'title' => 'Lista de Usuarios'
        ]);
    }

    public function create(){

    }

    public function show(){
        
    }

    public function edit(){
        
    }
}