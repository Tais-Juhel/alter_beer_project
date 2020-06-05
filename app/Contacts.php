<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    protected $name = "contacts";

    protected $table = 'contacts';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id','name', 'firstname', 'email','number','id_entreprise'
    ];
}
