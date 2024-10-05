<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Approval extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
        'approvable_type',
    ];

    protected function casts() {
        return [
            'content' => 'array'
        ];
    }
}
