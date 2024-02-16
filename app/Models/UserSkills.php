<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSkills extends Model
{
    use HasFactory;

    //declaration of the table used
    protected $table = 'user_skills';



    /**
    *Attributes of the class
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

    public function set_laravel_skills($laravel_skills){
      $this->attributes['laravel_skills'] = $laravel_skills;
    }

    public function get_laravel_skills(){
      return $this->attributes['laravel_skills'];
    }

    public function set_other_skills($other_skills){
      $this->attributes['other_skills'] = $other_skills;
    }

    public function get_other_skills(){
      return $this->attributes['other_skills'];
    }

    //eloquest relatiochips of the skill class
    public function user()
    {
      return belongsTo(User::class);
    }
}
