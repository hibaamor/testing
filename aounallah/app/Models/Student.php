<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table='student_tabel';

    protected $fillable = ['Time1', 'Time2','Time3','Time4','Time4','Time5','Time6','Time7'];
}

