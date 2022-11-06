<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;


/**
* Table: users
*
* === Columns ===
* @property int $id
* @property string $email
* @property string $login
* @property string $password
* @property Carbon|null $created_at
* @property Carbon|null $updated_at
*
* === Relationships ===
* @property-read UserSettings|null $userSettings
*/
class User extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $fillable = [
        'email',
        'login',
        'password'
    ];

    public function userSettings(): HasOne
    {
        return $this->hasOne(UserSettings::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::created(function(User $user) {
            UserSettings::query()->create([
                'user_id' => $user->id
            ]);
        });
    }
}
