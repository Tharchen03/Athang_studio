<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AthangShorts extends Model
{
    protected $table = 'athang_shorts';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'studentId','address', 'mobile','age'];
    use HasFactory;
}
