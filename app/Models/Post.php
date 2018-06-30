<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Marquine\EloquentUuid\Uuid;

class Post extends Model
{
    use Uuid;
    public $PostTitle;

    public function postCategory()
    {
        return $this->belongsTo('\App\Models\PostCategory','post_categories_id');
    }

    public function postTag()
    {
        return $this->belongsToMany('\App\Models\PostTag','post_post_tags','post_id','post_tag_id');
    }
}
