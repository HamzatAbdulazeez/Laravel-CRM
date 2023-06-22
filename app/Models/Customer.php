<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Customer extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'id',
        'firstName',
        'lastName',
        'address',
        'phone',
        'email',
    ];

    protected $casts = [
        'id' => 'string'
    ];
}