<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;



class PostTranslation extends Model implements TranslatableContract

{
    use Translatable;
    use HasFactory;

    protected $table = 'post_translation';
    public $timestamps = false;
    protected $fillable = ['id', 'post_id', 'locale', 'title', 'content', 'address', 'smallDesc'];
    public $translatedAttributes = ['title', 'content', 'address', 'smallDesc'];
}

/* 
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Translatable;
implements TranslatableContract
 */