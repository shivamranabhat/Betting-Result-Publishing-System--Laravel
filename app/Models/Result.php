<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;
    protected $fillable=[
        'rank','name','bet_number','game_id','time_id'
    ];
    public function game()
    {
        return $this->belongsTo(Game::class);
    }
    public function time()
    {
        return $this->belongsTo(Timing::class);
    }
}
