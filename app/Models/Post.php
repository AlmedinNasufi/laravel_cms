<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'photo_id',
        'category_id',
        'title',
        'body'
    ];

    //we use this relationship for admin/post/ to display user->name
    public function user(){
        return $this->belongsTo('\App\Models\User');
    }

    public function photo(){
        return $this->belongsTo('\App\Models\Photo');
    }

    public function category(){
        return $this->belongsTo('\App\Models\Category');
    }
}
