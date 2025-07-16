<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conference extends Model
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

    public function category(){

        return $this->belongsTo(ConferenceCategory::class,'category_id');
    }

}
