<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Tags\HasTags;

class Company extends Model
{
    use HasTags;
    protected $guarded = [];

}
