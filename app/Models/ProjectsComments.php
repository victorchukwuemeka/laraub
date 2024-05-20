<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectsComments extends Model
{
    use HasFactory;

    protected $table = 'project_comment';

    protected $fillable = [
        'user_id','parent_id',
        'laravel_projects_id','content'
    ];


    public function laravel_projects()
    {
      return $this->belongsTo(LaravelProjects::class);
    }


    public function replies()
    {
      return $this->hasMany(ProjectsComments::class, 'parent_id');
    }

   
    public function parentComment()
    {
      return $this->belongsTo(ProjectsComments::class, 'parent_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
