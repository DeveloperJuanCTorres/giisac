<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Project extends Model
{
    public function taxonomy()
{
    return $this->belongsTo(Taxonomy::class, 'taxonomy_id');
}
}
