<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class document extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'document',
        'date_de_publication',
        'user_id'
    ];

    public function user(){
        //En théorie utilisé dans le TP
        return $this->belongsTo(User::class);
    }

    protected function titre(): Attribute
    {
        return Attribute::make(
            get: fn($value) => json_decode($value, true),
            set: fn($value) => json_encode($value)
        );
    }
}
