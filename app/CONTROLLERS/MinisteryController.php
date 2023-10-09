<?php 

namespace App\Controllers;

use App\Models\Ministery;

class MinisteryController extends Controller
{
    public function index(){

        $ministeryModel = new Ministery;
        $ministerys = $ministeryModel->all();

        


        // return $contactModel->all();
        //   return $userModel->findbyname("Usuario 1"); //Cuidado los nombres en la BD tienen espacios

        // return $userModel->delete(11);

        return $this->view('ministerys_list', [
            'title' => 'Lista de ministerios',
            'ministerys' => $ministerys

        ]);
    }

    public function create(){

        $ministerysModel = new Ministery;
        $ministerys = $ministerysModel->all();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $ministeryPOST= $_POST;

            $ministeryModel = new Ministery;
            $ministeryModel->create([
                'name' => $ministeryPOST['name'],
            ]);

            return $this->view('dashboard');
        }
        
        return $this->view('ministery_create', [
            'title' => 'Crear Ministerio',
            'ministerys' => $ministerys]);

    }  


    public function show($id){

        $ministeryModel = new Ministery;
        $ministery = $ministeryModel->find($id);

        return $this->view('ministery_show', [
            'title' => 'Mostrar Ministerio',
            'ministery' => $ministery
        ]);
    }

    public function edit($id){

        $ministeryModel = new Ministery;
        $ministery = $ministeryModel->find($id);

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $ministeryPOST= $_POST;

            var_dump($ministeryPOST);

            $ministeryModel = new Ministery;

           

            $ministeryModel->update($id,[
                'name' => $ministeryPOST['name'],
                
            ]);

            return $this->view('dashboard');
        }
        
        return $this->view('ministery_edit', [
            'title' => 'Editar Ministerio',
            'ministery' => $ministery
        ]);
    }


    public function delete($id){

        $ministeryModel = new Ministery;

        $ministeryModel ->update_relation($id,'id_ministery','chargues');




        $ministery = $ministeryModel->delete($id);

        return $this->view('ministery_delete');
    }
}


        