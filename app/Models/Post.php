<?php

namespace App\Models;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    protected $table = 'Posts';

    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'description',
        'yt_frame',
        'meta_title',
        'meta_description',
        'meta_keyword',
        'status',
        'created_by'
    ];
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
