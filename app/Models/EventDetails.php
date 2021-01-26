<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'type',
        'link',

    ];

    public function users()
    {
        return $this->belongsTo(User::Class);
    }

   
}