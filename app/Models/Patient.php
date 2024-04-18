<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_name',
        'phone_number',
        'email',
    ];


//    public function user():BelongsTo
//    {
//        return $this->belongsTo(User::class);
//    }

    public function user(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }

    public function appointments():HasMany
    {
        return $this->hasMany(Appointment::class);
    }
}
