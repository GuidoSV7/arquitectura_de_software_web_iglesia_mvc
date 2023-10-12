<?php 

namespace App\Controllers;

use App\Models\Event;

class EventController extends Controller
{
    public function index(){

        $eventModel = new Event;
        $events = $eventModel->all();

        

        // return $contactModel->all();
        //   return $userModel->findbyname("Usuario 1"); //Cuidado los nombres en la BD tienen espacios

        // return $userModel->delete(11);

        return $this->view('events_list', [
            'title' => 'Lista de eventos',
            'events' => $events

        ]);
    }

    public function create(){

        $eventsModel = new Event;
        $events = $eventsModel->all();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $eventPOST= $_POST;

            $eventModel = new Event;
            $eventModel->create([
                'name' => $eventPOST['name'],

                'description' => $eventPOST['description'],
                'photo_url' => 'https://img.freepik.com/vector-gratis/concepto-realista-semana-santa_52683-35672.jpg?w=740&t=st=1696979462~exp=1696980062~hmac=9615065710336838e8574c522f6f2985d2550817247de0b45ff7767d085db9d6',
            ]);

            return $this->view('dashboard');
        }
        
        return $this->view('event_create', [
            'title' => 'Crear Evento',
            'events' => $events]);

    }

    public function show($id){

        $eventModel = new Event;
        $event = $eventModel->find($id);

        return $this->view('event_show', [
            'title' => 'Mostrar Evento',
            'event' => $event
        ]);
    }

    public function edit($id){

        $eventModel = new Event;
        $event = $eventModel->find($id);

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $eventPOST= $_POST;

            $eventModel = new Event;
            $eventModel->update($id,[

                'name' => $eventPOST['name'],
                'description' => $eventPOST['description'],

            ]);

            return $this->view('dashboard');
        }

        return $this->view('event_edit', [
            'title' => 'Editar Evento',
            'event' => $event
        ]);
    }

    public function delete($id){

        $eventModel = new Event;
        $event = $eventModel->delete($id);

        return $this->view('event_delete', [
            'title' => 'Eliminar Evento',
            'event' => $event
        ]);
    }






}