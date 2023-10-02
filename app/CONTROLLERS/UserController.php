<?php 

namespace App\Controllers;
 
class UserController extends Controller
{
    public function index(){
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