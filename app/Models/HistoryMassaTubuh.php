<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoryMassaTubuh extends Model
{
    use HasFactory;
    protected $fillable = ['idUser','weight','height', 'hasil'];
}
