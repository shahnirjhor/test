<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slug', 'parent_id'];

    public function subcategory()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function portfolio()
    {
        return $this->hasMany(Portfolio::class, 'subcategory_id');
    }

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id','id');
    }


    public function delete()
    {
        $this->subcategory()->delete();
        $this->portfolio()->delete();
        return parent::delete();
    }
}
