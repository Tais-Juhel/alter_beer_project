<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entreprises extends Model
{
    protected $name = "entreprises";

    protected $table = 'entreprises';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name', 'adresse', 'type',
    ];
}
