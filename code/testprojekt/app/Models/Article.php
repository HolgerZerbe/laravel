<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Article extends Model
{
    use HasFactory;
    use SoftDeletes; 
    protected $fillable = ['title', 'text', 'interest_id', 'likes'];

    protected $with = ['tags'];

    public function setLikesAttribute($value) {
        $this->attributes['likes'] = encrypt($value);
    }

    public function getLikesAttribute($value) {

        return decrypt($value);

    }

    public function interests() {

        return $this->belongsToMany('App\Models\Interest');
    }

    public function tags() {

        return $this->hasMany('App\Models\Tag');
    }

}