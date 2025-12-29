<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'user_id',
    ];

    /**
     * هر پست متعلق به یک کاربر است
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     *  هر پست می‌تواند چند کامنت داشته باشد
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
