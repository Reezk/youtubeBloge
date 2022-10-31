<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Tag extends Model implements TranslatableContract

{
    use Translatable;
    use HasFactory;

    protected $table = 'tags';
    protected $fillable = ['id', 'image', 'category_id', 'created_at', 'updated_at', 'deleted_at'];
    public $translatedAttributes = ['title'];
}
