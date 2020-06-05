<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Demandes extends Model
{
    protected $name = "demandes";

    protected $table = 'demandes';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name', 'type',
    ];
}
