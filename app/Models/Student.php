<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_nm',
        'last_nm',
        'd_o_b',
        'class',
        'phone_nbr',
        'email_addr',
        'gender',
    ];
}
