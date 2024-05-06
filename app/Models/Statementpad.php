<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Statementpad extends Model
{
    use HasFactory;

    protected $fillable = [
        'page_number',
        'full_name',
        'residential_address',
        'business_address',
        'occupation',
        'village',
        'identity_card',
        'chief',
        'district',
        'nationality',
        'sex',
        'age',
        'date',
        'issued_at',
    ];
    
  
}
