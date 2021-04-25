<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Setting extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'school_name',
        'motto',
        'logo',
        'test_session',
        'exam_session',
        'lecture_hour',
    ];
}
