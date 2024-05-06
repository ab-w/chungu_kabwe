<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rapid extends Model
{
    use HasFactory;

    use HasFactory;
    protected $fillable = [
        'destination',
        'book_in',
        'book_out',
        'officer_id',
        'visit',
        // Add other fields as needed
    ];

    public function rapid_response()
    {
        return $this->hasMany(Officer::class, 'officer_id', 'id');
    }
}
