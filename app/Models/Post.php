<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'article'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeOrderByNew($query)
    {
        return $query->orderBy('id', 'desc');
    }
}
