<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'events_id', 'name', 'detail', 'creater'
    ];
    public function myevent()
    {
        return $this->hasMany('App\Model\Event', 'id', 'id');
    }
}
