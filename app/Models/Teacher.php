<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Authenticatable
{
    use HasFactory;

    protected $fillable = ['name', 'email','photo_url','password','number'];

    public function subjects(){
        return $this->belongsToMany(Subject::class, 'courses', 'teacher_id', 'subject_id');
    }

}
