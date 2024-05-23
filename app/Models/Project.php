<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'url', 'cover_image', 'video', 'start_date', 'finish_date', 'description', 'notes', 'status', 'slug'];
}
