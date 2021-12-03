<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable')->select('id', 'filename', 'position');
    }

    public function getImage()
    {
        return isset($this->images()->first()->filename) ? '/storage/uploads/' . $this->images()->first()->filename : '#';
    }
}
