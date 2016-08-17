<?php

namespace Jacklaravel\Calendar\models;

use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    protected $fillable = ['title','start_date','end_date','bgcolor','bdcolor','description'];
}
