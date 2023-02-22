<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Book extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'title',
        'anons_title',
        'description',
        'image_path',
        'status',
        'author_id',
        'category_id'
    ];

    public function author()
    {
        return $this->hasOne(User::class, 'id', 'author_id')->first();
    }

    public function category()
    {
        return $this->hasOne(CategoryBook::class, 'id', 'category_id')->first();
    }

    public function getImageUrlAttribute() {
        return asset('public' . Storage::url($this->image_path));
    }
}
