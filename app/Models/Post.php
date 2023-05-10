<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';
    // public $timestamps = false;
    protected $fillable = [
        'title', 'is_active', 'slide_url','content','created_at','updated_at','category_id'
    ];
}
