<?php 

namespace App\Controllers;

use App\Models\Rol;
use App\Models\User;

class AdminController extends Controller
{
    public function index(){

        $userModel = new User;
        $users = $userModel->all();

        // return $contactModel->all();
        //   return $userModel->findbyname("Usuario 1"); //Cuidado los nombres en la BD tienen espacios

        // return $userModel->delete(11);

        return $this->view('users_list', [
            'title' => 'Lista de usuarios',
            'users' => $users

        ]);
    }

    public function create(){

        $rolesModel = new Rol;
        $roles = $rolesModel->all();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $userPOST= $_POST;

            var_dump($userPOST);

            $userModel = new User;
            $userModel->create([
                'name' => $userPOST['name'],
                'phone_number' => $userPOST['phone_number'],
                'password' =>  password_hash($userPOST['password'],PASSWORD_BCRYPT ) ,
                'id_rol' => $userPOST['role'],
            ]);

            return $this->view('dashboard');
        }
        
        return $this->view('user_create', [
            'title' => 'Crear Usuario',
            'roles' => $roles


        ]);
    }

    public function show($id){

        $userModel = new User;
        $user = $userModel->find($id);

        // var_dump($userModel->rolbyid_rol($user['id_rol']));
        $rol = $userModel->rolbyid_rol($user['id_rol']);
        
        return $this->view('user_show', [
            'title' => 'Editar Usuario',
             'user' => $user,
                'rol' => $rol
            

        ]);

        
    }

    public function edit($id){
        

        $userModel = new User;
        $user = $userModel->find($id);
        

        // var_dump($userModel->rolbyid_rol($user['id_rol']));
        $rol = $userModel->rolbyid_rol($user['id_rol']);

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $userPOST= $_POST;

            var_dump($userPOST);

            $userModel->update($id,[
                'name' => $userPOST['name'],
                'phone_number' => $userPOST['phone_number'],
                'id_rol' => $userPOST['id_rol'],
            ]);

            return$this->view('dashboard');
        }

        
        return $this->view('user_edit', [
            'title' => 'Editar Usuario',
             'user' => $user,
                'rol' => $rol
            

        ]);
    }

    public function delete($id){
        $userModel = new User;

        $userModel->delete($id);

        return $this->view('user_delete');
        
    }
}