<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'age',
        'height',
        'weight',
        'gender',
        'school_level',
        'school_name',
        'state',
        'position',
        'top_pitch_velocity',
        'average_velocity',
        'sprit_time',
        'vertical_jump_height',
        'hitting_rap',
        'resistance_ratio',
        'velocity_video',
        'valo_video_date',
        'velocity_video2',
        'valo_video_date2',
        'sprint_video',
        'sprint_video_date',
        'jump_video_link',
        'jump_video_link_date',
        'hitting_video',
        'hitting_video_date',
        'resistance_video',
        'resistance_video_date',
    ];
}
