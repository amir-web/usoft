<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Service extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function children()
    {
        return $this->hasMany(Service::class, 'parent_id');
    }

    public function image()
    {
        return $this->morphMany(Image::class, 'imageable')->select('id', 'filename');
    }

    public function getImage()
    {
        return isset($this->image()->first()->filename) ? '/storage/uploads/' . $this->image()->first()->filename : '#';
    }

    public function category()
    {
        return $this->belongsTo(self::class, 'parent_id');
    }

    public function getCategory()
    {
        $parent = $this->category;
        if (empty($parent)){
            return "Основной";
        } else {
            return $parent->title_ru;
        }
    }

    public function icons()
    {
        return $this->belongsToMany(Icon::class,'service_icon','service_id','icon_id');
    }


}
