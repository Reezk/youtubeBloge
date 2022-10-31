<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class PostTag extends Model implements TranslatableContract

{
    use Translatable;
    use HasFactory;

    protected $table = 'post_tag';
    protected $fillable = ['post_id', 'tag_id', 'id', 'created_at', 'updated_at'];
    public $translatedAttributes = ['title', 'content'];
}
