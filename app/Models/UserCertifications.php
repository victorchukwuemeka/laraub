<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCertifications extends Model
{
    use HasFactory;

    //table of the model
    protected $table = 'user_certifications';



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

    public function set_laravel_certifications($laravel_certifications){
      $this->attributes['laravel_certifications'] = $laravel_certifications;
    }

    public function get_laravel_certifications(){
      return $this->attributes['laravel_certifications'];
    }

    public function set_other_certifications($other_certifications){
      $this->attributes['other_certifications'] = $other_certifications;
    }

    public function get_other_certifications(){
      return $this->attributes['other_certifications'];
    }

    //eloquest relationship of the certificates
    public function user()
    {
      return $this->belongsTo(User::class);
    }

}
