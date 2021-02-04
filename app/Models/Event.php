<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;


    protected $fillable = [
        'title',
        'description',
        'category',
        'capacity'
    ];


    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
