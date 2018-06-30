<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Marquine\EloquentUuid\Uuid;

class PostTag extends Model
{
    use Uuid;

    public function post()
    {
        return $this->belongsToMany('\App\Models\Post','post_post_tags','post_tag_id','post_id');
    }
}
