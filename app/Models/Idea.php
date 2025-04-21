<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Idea extends Model
{
    protected $fillable = [
        'user_id',
        'content' ,
         ] ;


    public function comments(){
        return $this->hasMany(Comment::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    //This says: “Give me all the users who liked this idea.”
    public function likes(){
        return $this->belongsToMany(User::class , 'idea_like')->withTimestamps();
    }

}
