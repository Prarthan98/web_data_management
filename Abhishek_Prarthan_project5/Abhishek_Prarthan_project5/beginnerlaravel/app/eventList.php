<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventList extends Model
{
    //
    protected $fillable = [
        'EventId', 'EventName', 'EventDescription', 'EventLocation','EventDate','EventTime',
    ];
}
