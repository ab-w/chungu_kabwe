<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Officer;

class Occurrence extends Model
{
    protected $fillable = [
        'shift',
        'ref',
        'entry',
        'date_time',
        'subject',
        'officer_id',
        'occurrence',
    ];

    // Define relationships if necessary
    public function officer()
    {
        return $this->belongsTo(Officer::class, 'officer_id', 'id');
    }
}
