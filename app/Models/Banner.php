<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    protected $fillable = ['title_ru','title_uz', 'description_ru','description_uz', 'link'];

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
