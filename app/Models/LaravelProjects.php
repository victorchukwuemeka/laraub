<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LaravelProjects extends Model
{
    use HasFactory;

    protected $table = 'laravel_projects';

    protected $fillable = [
      'image','user_id','name', 'motto','description',
      'website', 'github_repo'
    ];

    //relationships associated with laravel Projects
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
