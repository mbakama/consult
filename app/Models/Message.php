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
    private static $encypt = "AES-256-CBC";
    private static $message ="";
    public function from()
    { 
            return $this->belongsTo(User::class,'user_sent'); 
    }
    
    
    
}
