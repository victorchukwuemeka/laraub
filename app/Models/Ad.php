<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    use HasFactory;

    protected $fillable = [
      'user_id', 'title', 'description',
       'media','verified','media_type', 'url'
    ];
        

    public function user()
    {
      return $this->belongsTo(User::class);
    }

}
