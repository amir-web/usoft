<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebDevelopment extends Model
{
    use HasFactory;

    protected $fillable = ['title_ru','title_uz', 'description_ru','description_uz',];

    public function image()
    {
        return $this->morphMany(Image::class, 'imageable')->select('id', 'filename');
    }

    public function getImage()
    {
        return isset($this->image()->first()->filename) ? '/storage/uploads/' . $this->image()->first()->filename : '#';
    }
}
