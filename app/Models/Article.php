<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Tonysm\RichTextLaravel\Models\Traits\HasRichText;

class Article extends Model
{
    use HasFactory,HasRichText;

    protected $table = 'article';
    /**
    *Attributes of the post class
    */
    protected $guarded = [];

    protected $richTextAttributes = [
        'body',
        'notes',
    ];

    public function set_id($id){
      $this->attributes['id'] = $id;
    }

    public function get_id(){
      return $this->attributes['id'];
    }

    public function set_title($title){
      $this->attributes['title'] = $title;
    }

    public function get_title(){
      return $this->attributes['title'];
    }

    public function set_body($body){
      $this->attributes['body'] = $body;
    }

    public function get_body(){
      return $this->attributes['body'];
    }

    public function set_user_id($user_id){
      $this->attributes['user_id'] = $user_id;
    }

    public function get_user_id(){
      return $this->attributes['user_id'];
    }


    /*validation*/
    public static function validate($request){
      $request->validate([
        'title' => ['required', 'unique:article', 'max:255'],
        'body' => ['required'],
      ]);
    }


}
