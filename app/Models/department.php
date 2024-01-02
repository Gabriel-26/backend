<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class department extends Model
{
    
    use HasFactory;
    protected $primaryKey = 'department_id';
    
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'department_id',
        'department_name'
    ];

}
