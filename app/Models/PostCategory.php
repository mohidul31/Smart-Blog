<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Marquine\EloquentUuid\Uuid;

class PostCategory extends Model
{
    use Uuid;

    public function post()
    {
        return $this->hasMany('\App\Models\Post','post_categories_id');
    }
}
