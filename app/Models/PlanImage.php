<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Plans;

class PlanImage extends Model
{
    use HasFactory;
    protected $fillable = [
        'plan_id',
        'image_path'
    ];

    public function plan()
    {
        return $this->belongsTo(Plans::class);
    }
}
