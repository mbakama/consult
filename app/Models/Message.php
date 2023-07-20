<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Message extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'contenu',
        'user_received',
        'user_sent'
    ];

    public function from()
    { 
            return $this->belongsTo(User::class,'user_sent'); 
    }
    
    
}
