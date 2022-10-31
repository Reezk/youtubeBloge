<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class TagTranslation extends Model implements TranslatableContract

{
    use Translatable;
    use HasFactory;

    protected $table = 'tag_translation';
    //public $timestamps = false;
    protected $fillable = ['id', 'created_at', 'updated_at', 'deleted_at'];
}
