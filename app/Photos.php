<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photos extends Model
{
    protected $table = 'photos';

    protected $fillable = ['uri', 'public','title' ,'desc', 'user_id'];

}
