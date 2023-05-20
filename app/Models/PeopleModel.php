<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeopleModel extends Model
{
    protected $table = 'people';

    protected $fillable = [
        'id',
        'first_name',
        'last_name',
        'age',
        'phone_number',
        'email',
        'address',
        'city',
        'zip_code',
        'country'

    ];
    public $timestamps = true;
}
