<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'description',
        'image',
        'status',
    ];

    public function category()
    {
        return $this->belongsTo(TrainingCategory::class, 'category_id');
    }
}
