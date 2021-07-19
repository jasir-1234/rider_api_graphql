<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Slide extends Model
{
    use SoftDeletes;
    protected $casts = [
        'image' => 'array'
    ];
    public $unauthorized = ['index', 'getSlides'];

    public function getImage()
    {
        return  $this->image['uri'] ? url('storage/' . $this->image['uri']) : null;
    }

    public function getSlideGQLImage()
    {
        return [
            'url' => $this->image['uri'] ? url('storage/' . $this->image['uri']) : null,
        ];
    }

    public function banner()
    {
        return $this->belongsTo(Banner::class);
    }

    public function scopeByLatest($query)
    {
        return $query->latest();
    }
}
