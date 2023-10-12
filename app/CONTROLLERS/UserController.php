<?php 

namespace App\Controllers;

use App\Models\Rol;
use App\Models\User;
use App\Models\Event;

class UserController extends Controller{

    public function home(){
        $eventsModel = new Event;
        $events = $eventsModel->all();


        return $this->view('home', [
            'title' => 'Home',
            'events' => $events
        ]);
    }

    public function about(){
        return $this->view('about', [
            'title' => 'Sobre Nosotros'
        ]);
    }

}