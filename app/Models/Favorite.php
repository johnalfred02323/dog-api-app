<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    protected $fillable = [
        'user_id',
        'pet_name',
        'image_url',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
