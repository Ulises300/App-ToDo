<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $table = 'events';
    protected $fillable = ['title', 'content','iduser','important','expirationDate'];
    public function user()
    {
        return $this->belongsTo(User::class,'iduser');
    }
}
