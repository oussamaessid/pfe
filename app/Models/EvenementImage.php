<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Evenement;


class EvenementImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'evenement_id',
        'image_path'
    ];

    public function evenement()
    {
        return $this->belongsTo(Evenement::class);
    }
}
