<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;


class CategoryTranslation extends Model implements TranslatableContract

{
    use Translatable;
    use HasFactory;

    protected $table = 'category_translation';
    public $timestamps = false;
    protected $fillable = ['id', 'category_id', 'locale', 'title', 'content'];
}
