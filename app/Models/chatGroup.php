<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatGroup extends Model
{
    use HasFactory;
    protected $primaryKey = 'chatGroup_id';
    
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'chatGroup_id'
    ];
}
