<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'slug'];

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }

    public function images(): MorphMany
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    public static function booted()
    {
        static::created(static function (Category $category) {
            $category->slug = Str::slug($category->name . ' ' . $category->id);
            $category->save();
        });
    }
}
