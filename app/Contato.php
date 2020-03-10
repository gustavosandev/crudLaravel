<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    public function lista()
    {
    	return (object) [
    		'nome'=>'rafael',
    		'tel'=>'123456789',
    		'email'=>'rafa@email.com',
    	];
    }
}
