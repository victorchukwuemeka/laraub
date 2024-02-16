<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experiences extends Model
{
    use HasFactory;

    //table of the model
    protected $table = 'user_work_experiences';


    /**
    *Attributes of the post class
    * both getting the values from the db
     * putting in any
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

    public function set_position($position){
      $this->attributes['position'] = $position;
    }

    public function get_position(){
      return $this->attributes['position'];
    }

    public function set_company($company){
      $this->attributes['company'] = $company;
    }

    public function get_company(){
      return $this->attributes['company'];
    }


    public function set_start_date($start_date){
      $this->attributes['start_date'] = $start_date;
    }

    public function get_start_date(){
      return $this->attributes['start_date'];
    }

    public function set_end_date($end_date){
      $this->attributes['end_date'] = $end_date;
    }

    public function get_end_date(){
      return $this->attributes['end_date'];
    }

    //eloquest relationship with the user
    public function user()
    {
      return belongsTo(User::class);
    }
}
