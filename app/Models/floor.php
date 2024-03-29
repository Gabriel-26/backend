<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Floor extends Model
{
    use HasFactory;

    protected $primaryKey = 'floor_id';

    public $incrementing = false;
    protected $keyType = 'string';


    protected $fillable = [
        'floor_id',
        'floor_name',
    ];
}
