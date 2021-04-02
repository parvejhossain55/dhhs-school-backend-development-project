<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'sname', 'sfname', 'smname', 'gender', 'gurdian_mobile', 'roll', 'class', 'section', 'address'
    ];
}
