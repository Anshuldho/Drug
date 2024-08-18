<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drug extends Model
{
    use HasFactory;

    protected $fillable = [
        'drugId',
        'name',
        'batchNumber',
        'manufacturer',
        'expiryDate'
    ];
}
