<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Studentinfo extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'student_id',
        'parent_name',
        'parent_email',
        'parent_address',
        'student_address',
        'parent_contact'
    ];
}
