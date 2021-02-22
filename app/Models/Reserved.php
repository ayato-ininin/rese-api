<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserved extends Model
{
   use HasFactory;
     public function toUserId()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function fromUserId()
    {
        return $this->belongsTo('App\Shop', 'shop_id', 'id');
    }
}
