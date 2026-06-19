<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpeningHour extends Model
{
    /** @use HasFactory<\Database\Factories\OpeningHourFactory> */
    use HasFactory;

    /**
     * @var list<string>
     */
    protected $fillable = [
        'day',
        'opens_at',
        'closes_at',
        'is_closed',
        'sort_order',
    ];

    /**
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'is_closed' => 'boolean',
            'sort_order' => 'integer',
        ];
    }
}
