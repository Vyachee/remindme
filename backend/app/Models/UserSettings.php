<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSettings extends Model
{
    use HasFactory;
    protected $table = 'user_settings';
    protected $fillable = [
        'user_id',
        'email_verified_at',
        'telegram_connected_at',
        'telegram_id',
        'notify_email',
        'notify_telegram'
    ];
}
