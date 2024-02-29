<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProjects extends Model
{
    use HasFactory;

    protected $table = 'user_projects';
    /**
    *Attributes of the post class
    */

    public function set_id($id){
      $this->attributes['id'] = $id;
    }

    public function get_id(){
      return $this->attributes['id'];
    }

    public function set_user_id($user_id){
      $this->attributes['user_id'] = $user_id;
    }

    public function get_user_id(){
      return $this->attributes['user_id'];
    }

    public function set_project_name($project_name){
      $this->attributes['project_name'] = $project_name;
    }

    public function get_project_name(){
      return $this->attributes['project_name'];
    }

    public function set_description($description){
      $this->attributes['description'] = $description;
    }

    public function get_description(){
      return $this->attributes['description'];
    }


    public function set_link($link){
      $this->attributes['link'] = $link;
    }

    public function get_link(){
      return $this->attributes['link'];
    }

    public function set_technologies_used($technologies_used){
      $this->attributes['technologies_used'] = $technologies_used;
    }

    public function get_technologies_used(){
      return $this->attributes['technologies_used'];
    }

    //eloquest relationship of projects
    public function user()
    {
      return $this->belongsTo(User::class);
    }


}
