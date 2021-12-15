<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function image()
    {
        return $this->morphMany(Image::class, 'imageable')->select('id', 'filename', 'position');
    }

    public function getImage()
    {
        return isset($this->image()->first()->filename) ? '/storage/uploads/' . $this->image()->first()->filename : '#';
    }
}
