<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Historique extends Model
{
    protected $name = "historique";

    protected $table = 'historique';
    protected $primaryKey = 'id';

    protected $fillable = [
        'type',
    ];
}
