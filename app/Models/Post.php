<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function postFile()
    {
        return $this->hasOne(PostFileUpload::class);
    }
}
