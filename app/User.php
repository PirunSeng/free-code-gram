<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewUserWelcomeMail;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'username', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function profile() {
      return $this->hasOne(Profile::class);
    }

    protected static function boot() {
      parent::boot();

      // this func gets called after the object is created. It works like after_save in Rails.
      static::created(function ($user) {
        $user->profile()->create([
          'title' => $user->username
        ]);

        Mail::to($user->email)->send(new NewUserWelcomeMail());
      });
    }

    public function posts() {
      return $this->hasMany(Post::class)->orderBy('created_at', 'DESC');
    }

    public function following() {
      return $this->belongsToMany(Profile::class);
    }
}
