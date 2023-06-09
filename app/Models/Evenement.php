<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use App\Models\EvenementImage;

class Evenement extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'description',
    ];

    public function evenementImages()
    {
        return $this->hasMany(EvenementImage::class);
    }
    public function attendees()
    {
        return $this->hasMany(Attendee::class);
    }

    protected $dates = [
        'start_date_time', 'end_date_time'
    ];

    public function setStartDateTimeAttribute($value)
    {
        $this->attributes['start_date_time'] = Carbon::parse($value);
    }

    public function setEndDateTimeAttribute($value)
    {
        $this->attributes['end_date_time'] = Carbon::parse($value);
    }

    public function getStartDateTimeAttribute($value)
    {
        return Carbon::parse($value)->format('Y-m-d H:i:s');
    }

    public function getEndDateTimeAttribute($value)
    {
        return Carbon::parse($value)->format('Y-m-d H:i:s');
    }
}
