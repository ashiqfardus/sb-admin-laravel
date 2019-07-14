<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $fillable=['theme_primary','theme_secondary','header_footer'];
}
