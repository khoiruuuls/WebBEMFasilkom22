<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weeklyreport extends Model
{
    use HasFactory;

    protected $table = 'weeklyreport';

    protected $fillable = [
        'laporan',
        'slug',
        'id_user',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function scopeForUser($query, $user)
    {
        return $query->where('id_user', $user->id);
    }
}
