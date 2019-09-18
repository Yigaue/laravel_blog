<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'content'];

    public function comments(){

            return $this->hasMany(Comment::class);
    }

    public function users(){
    return $this->belongsTo(User::class);
    }
public function addcomment($body){

    $this->comments()->create(compact($body));
}


}

