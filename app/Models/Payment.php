<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'ticket_id',
        'card_name',
        'card_number',
        'expiry_date',
        'security_code',
        'total',
        'method',
    ];
}
