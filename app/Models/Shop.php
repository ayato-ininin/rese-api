<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;
            public function toUserId()
    {
        return $this->hasMany('App\Like', 'shop_id', 'id');
    }

    public function fromUserId()
    {
        return $this->hasMany('App\Reserve', 'shop_id', 'id');
    }
}
