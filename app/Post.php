<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Mpociot\Firebase\SyncsWithFirebase;

class Post extends Model
{
    use SyncsWithFirebase;

    protected $fillable = ['author'];

    protected $visible = ['id','author'];
}
