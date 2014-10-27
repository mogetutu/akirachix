<?php

class Profile extends Eloquent
{
    protected $fillable = ['firstname', 'lastname', 'phone'];

    public function user()
    {
        return $this->belongsTo('User');
    }
}
