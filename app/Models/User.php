<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * ا یک کاربر می‌تواند چندین پست داشته باشد
     */
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    /**
     *  یک کاربر می‌تواند چندین کامنت داشته باشد
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
