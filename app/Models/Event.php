<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'detail', 'user_name', 'datestart', 'dateend', 'timestart', 'timeend'
    ];
    public function myevent()
    {
        return $this->hasMany('App\Model\Event', 'id', 'id');
    }
}
