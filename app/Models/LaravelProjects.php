<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaravelProjects extends Model
{
    use HasFactory;

    protected $table = 'laravel_projects';

    protected $fillable = [
      'image', 'name', 'motto','description', 'website', 'github_repo'
    ];
}
