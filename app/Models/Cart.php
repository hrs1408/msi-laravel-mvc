<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'quantity',
        'total_money'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function cartDetail()
    {
        return $this->hasMany(CartDetail::class);
    }

}
