<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Plat;

class PlatImage extends Model
{
    use HasFactory;
    protected $fillable = [
        'plat_id',
        'image_path'
    ];

    public function plat()
    {
        return $this->belongsTo(Plat::class);
    }

}
