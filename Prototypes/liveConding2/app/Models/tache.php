<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tache extends Model
{
    use HasFactory;
    protected $table='taches';
    public $timestamps = FALSE;
    public $fillable=[
        "name"
    ];
}
