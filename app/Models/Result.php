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
        return $this->hasMany(Game::class);
    }
    public function timing()
    {
        return $this->hasMany(Timing::class);
    }
}
