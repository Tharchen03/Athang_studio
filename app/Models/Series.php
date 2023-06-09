<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    protected $table = 'series';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'description','vediolink', 'image'];
    use HasFactory;
}

