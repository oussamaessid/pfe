<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Hotel;

class HotelImage extends Model
{
    use HasFactory;
    protected $fillable = [
        'hotel_id',
        'image_path'
    ];

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }
}
