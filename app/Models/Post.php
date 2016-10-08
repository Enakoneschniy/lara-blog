<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $filable = ['title', 'preview_text', 'detail_text', 'active', 'user_id'];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
