<?php 

namespace App\Controllers;

use App\Models\Chargue;

class ChargueController extends Controller
{
    public function index(){

        $chargueModel = new Chargue;
        $chargues = $chargueModel->all();

        

        // return $contactModel->all();
        //   return $userModel->findbyname("Usuario 1"); //Cuidado los nombres en la BD tienen espacios

        // return $userModel->delete(11);

        return $this->view('chargues_list', [
            'title' => 'Lista de cargos',
            'chargues' => $chargues

        ]);
    }

    public function create(){

        $charguesModel = new Chargue;
        $chargues = $charguesModel->all();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $charguePOST= $_POST;

            $chargueModel = new Chargue;
            $chargueModel->create([
                'name' => $charguePOST['name'],
            ]);

            return $this->view('dashboard');
        }
        
        return $this->view('chargue_create', [
            'title' => 'Crear Cargo',
            'chargues' => $chargues]);

    }

    public function show($id){

        $chargueModel = new Chargue;
        $chargue = $chargueModel->find($id);

        return $this->view('chargue_show', [
            'title' => 'Mostrar Cargo',
            'chargue' => $chargue
        ]);
    }

    public function edit($id){

        $chargueModel = new Chargue;
        $chargue = $chargueModel->find($id);

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $charguePOST= $_POST;

            $chargueModel = new Chargue;
            $chargueModel->update($id,[
                'name' => $charguePOST['name'],
            ]);

            return $this->view('dashboard');
        }

        return $this->view('chargue_edit', [
            'title' => 'Editar Cargo',
            'chargue' => $chargue
        ]);
    }

    public function delete($id){

        $chargueModel = new Chargue;
        $chargue = $chargueModel->find($id);

        $chargueModel->delete($id);

        return $this->view('chargue_delete');
    }

    

}