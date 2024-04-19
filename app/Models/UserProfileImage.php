<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfileImage extends Model
{
    use HasFactory;

    protected $table = 'user_profile_image';

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

    public function set_user_profile_image($profile_image){
      $this->attributes['profile_image'] = $profile_image;
    }

    public function get_user_profile_image(){
      return $this->attributes['profile_image'];
    }

    //profile_image_relationship
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
