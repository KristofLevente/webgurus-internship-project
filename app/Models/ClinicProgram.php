<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ClinicProgram extends Model
{
    use HasFactory;

    protected $casts = [
        'days' => 'array',
    ];

    protected $fillable = [
        'opening_hour',
        'closing_hour',
        'days',
    ];

    public function user(): BelongsTo
    {
        return $this->BelongsTo(User::class);
    }
}
