<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $table = 'clients';
    protected $fillable = [
        'number_client',
        'name',
        'number_phone',
        'email',
        'count_client',
        'date_up',
        'date_create',
        'number_table',
    ];
}
