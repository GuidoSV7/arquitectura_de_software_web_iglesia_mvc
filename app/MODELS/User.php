<?php

namespace App\Models;



class User extends Model
{

    protected  $table = 'users';
    

    public function rolbyid_rol($id_rol){
        $rol = new Rol;
        $rol = $rol->find($id_rol);
        return $rol['name'];
        

    }

  
}


