<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pizza extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $casts = [
        'toppings' => 'array',
    ];
    
    public function user(): BelongsTo {
        return $this -> belongsTo(related: User::class);
    }
}