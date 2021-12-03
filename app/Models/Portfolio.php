<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    //protected $fillable = ['title_ru','title_uz', 'description_ru','description_uz', 'link'];

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable')->select('id', 'filename', 'position');
    }

    public function getImage()
    {
        return isset($this->images()->first()->filename) ? '/storage/uploads/' . $this->images()->first()->filename : '#';
    }
}
