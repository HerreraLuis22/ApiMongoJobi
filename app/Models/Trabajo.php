<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;
class Trabajo extends Model
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = "Trabajo";
}