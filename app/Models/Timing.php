<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timing extends Model
{
    use HasFactory;
    protected $fillable=[
        'time'
    ];
    public function result()
    {
        return $this->belongsTo(Result::class);
    }
}
