<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
   //--This fields tells us that, whether the message is our own
   protected $appends = ['selfMessage'];

   public function getSelfMessageAttribute()
   {
    return $this->user_id === auth()->user()->id;
   }
   //--get users--
   public function user()
   {
    return $this->belongsTo(User::class);
   }
}
