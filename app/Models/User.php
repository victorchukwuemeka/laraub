<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    //attribute handling the profile image
    public function set_profile_image($profile_image)
    {
       $this->attributes['profile_image'] = $profile_image;
    }
    public function get_profile_image()
    {
      return $this->attributes['profile_image'];
    }



    //combination of all the user relationship
    public function profile()
    {
      return $this->hasOne(UserProfile::class, 'user_id');
    }

    public function certificates()
    {
      return $this->hasOne(UserCertifications::class);
    }

    public function projects()
    {
      return $this->hasMany(UserProjects::class);
    }

    public function latestProject()
    {
        return $this->hasOne(UserProjects::class)->latest();
    }

    public function experiences()
    {
      return $this->hasMany(Experiences::class);
    }

    public function fool()
    {
      return $u = "fool";
    }
    public function skills()
    {
      return $this->hasOne(UserSkills::class);
    }

    public function profileImage()
    {
        return $this->hasOne(UserProfileImage::class);
    }
}
