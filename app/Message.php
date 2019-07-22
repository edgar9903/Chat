<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Message extends Model
{
    protected $table = 'message';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'message','user_id'
    ];

    /**
     * get user from user_id.
     *
     * @return mixed
     */
    public function getUser()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
