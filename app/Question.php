<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
	protected $fillable = ['title','body']
    public function user(){
    	return $this->belongTo(User::class);
    }

    // $question = Question::find(1);
    // $quiestion->user->email;
}
