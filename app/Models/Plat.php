<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PlatImage;

class Plat extends Model
{
    use HasFactory;
    protected $table = 'plats';
    public $timestamps = false;
    protected $fillable = [];

    public function platImages()
    {
        return $this->hasMany(platImage::class);
    }
}
