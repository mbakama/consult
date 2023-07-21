<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Consultation extends Model
{
    use HasFactory, SoftDeletes; 

    public function consult()
    {
        return $this->belongsTo(User::class,'user_received');
    }
    protected $fillable = ['numero_consultation','user_id','deleted_at','debut_consultation','fin_consultation','status'];

    public $timestamps = false;
}
