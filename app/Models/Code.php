<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Code extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'id_user',
        'id_user_get',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
