<?php 

namespace App\Controllers;

use App\Models\Contact;

class UserController extends Controller
{
    public function index(){

        $contactModel = new Contact;


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