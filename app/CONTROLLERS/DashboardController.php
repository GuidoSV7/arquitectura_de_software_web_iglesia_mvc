<?php 

namespace App\Controllers;
 
class DashboardController extends Controller
{
    public function index(){
        return $this->view('dashboard');
    }

    public function profie(){
        return $this->view('profile');
    }

}