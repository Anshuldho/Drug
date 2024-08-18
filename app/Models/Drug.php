<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drug extends Model
{
    use HasFactory;

    // Specify the table if it does not follow Laravel's conventions
    // protected $table = 'drugs';

    // Allow mass assignment for these attributes
    protected $fillable = [
        'drugId', 'name', 'batchNumber', 'manufacturer', 'expiryDate'
    ];
}
