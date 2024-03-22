<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;


class Posts extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'texte',
        'date_de_creation',
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

    protected function texte(): Attribute
    {
        return Attribute::make(
            get: fn($value) => json_decode($value, true),
            set: fn($value) => json_encode($value)
        );
    }
}
