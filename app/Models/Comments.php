<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;

    protected $table = 'comments';

    public function set_id($id)
    {
        $this->attributes['id'] = $id;
    }

    public function get_id(){
        return $this->attributes['id'];
    }

    public function set_article_id($article_id)
    {
        $this->attributes['article_id'] = $article_id;
    }

    public function get_post_id(){
        return $this->attributes['article_id'];
    }

    public function set_user_id($user_id){
        $this->attributes['user_id'] = $user_id;
    }

    public function get_users_id(){
        return $this->attributes['users_id'];
    }

    public function set_comment($comment){
        $this->attributes['comment'] = $comment;
    }

    public function get_comment(){
        return $this->attributes['comment'];
    }

    public function article(){
        return $this->belongsTo(Article::class);
    }

}
