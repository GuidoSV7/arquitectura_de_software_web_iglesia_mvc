<?php 

namespace App\Controllers;
 
class RegisterController extends Controller
{
    public function register(){
        return $this->view('register');
    }
}