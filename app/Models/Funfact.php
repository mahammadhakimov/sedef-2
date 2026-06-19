<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funfact extends Model
{
    /** @use HasFactory<\Database\Factories\FunfactFactory> */
    use HasFactory;

    /**
     * @var list<string>
     */
    protected $fillable = [
        'icon',
        'value',
        'title',
        'sort_order',
        'is_active',
    ];

    /**
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'value' => 'integer',
            'sort_order' => 'integer',
            'is_active' => 'boolean',
        ];
    }
}
