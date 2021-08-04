<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guardian extends Authenticatable
{
    use HasFactory;

    protected $fillable = ['name', 'email','photo_url','password','number'];

}
