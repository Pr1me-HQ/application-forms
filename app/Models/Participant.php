<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    use HasFactory;

    protected $fillable = [
        'f_name',
        'l_name',
        'p_number',
        'email',
        'job',
        'profession',
        'who_f_hackathon',
        'it_experience',
        'hackathon_experience',
        'team_name',
        'about',
        'idea',
    ];
}
