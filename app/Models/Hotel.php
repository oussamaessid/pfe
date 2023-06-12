<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\HotelImage;

class Hotel extends Model
{
    use HasFactory;

    protected $table = 'hotel';
    //protected $primaryKey = 'id';
    public $timestamps = false;
    public function services()
    {
        return $this->belongsToMany(Service::class);
    }


    public function hotelImages()
    {
        return $this->hasMany(HotelImage::class);
    }
    // guarded
    protected $fillable = [
        'nom',
        'localisation',
        'prix',
        'étoiles',
        'image',
        'description',
    ];
}
