<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Congratulations extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'message', 'ip_address'];
}
