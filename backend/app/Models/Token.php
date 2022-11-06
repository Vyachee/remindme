<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Token extends Model
{
    use HasFactory;
    protected $table = 'tokens';
    protected $fillable = [
        'user_id',
        'access_token',
        'refresh_token',
        'access_token_valid_until',
        'refresh_token_valid_until',
        'ip'
    ];
}
