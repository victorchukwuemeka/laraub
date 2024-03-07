<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory;

    //table of the user_profile
    protected $table = 'user_profile';


    /**
    *Attributes of the  class
    * both getting the values from the db
     * putting it back
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

    public function set_job_title($job_title){
      $this->attributes['job_title'] = $job_title;
    }

    public function get_job_title(){
      return $this->attributes['job_title'];
    }

    public function set_company($company){
      $this->attributes['company'] = $company;
    }

    public function get_company(){
      return $this->attributes['company'];
    }


    public function set_company_website($company_website){
      $this->attributes['company_website'] = $company_website;
    }

    public function get_company_website(){
      return $this->attributes['company_website'];
    }

    public function set_education($education){
      $this->attributes['education'] = $education;
    }

    public function get_education(){
      return $this->attributes['education'];
    }


    public function set_location($location){
      $this->attributes['location'] = $location;
    }

    public function get_location(){
      return $this->attributes['location'];
    }

    public function set_availability($availability){
      $this->attributes['availability'] = $availability;
    }

    public function get_availability(){
      return $this->attributes['availability'];
    }

    public function set_contact_preferences($contact_preferences){
      $this->attributes['contact_preferences'] = $contact_preferences;
    }

    public function get_contact_preferences(){
      return $this->attributes['contact_preferences'];
    }

    //eloquest relationship of the userclass
    public function user()
    {
      return $this->belongsTo(User::class);
    }


}
