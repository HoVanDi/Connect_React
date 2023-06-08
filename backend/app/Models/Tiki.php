<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiki extends Model
{
    protected $table ="tikis";
    use HasFactory;
    protected $fillable = ['name', 'price', 'image', 'description', 'rate'];
}
