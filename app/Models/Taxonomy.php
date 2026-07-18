<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Taxonomy extends Model
{
    public function projects()
    {
        return $this->hasMany(Project::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($taxonomy) {

            if ($taxonomy->projects()->exists()) {
                throw new \Exception('No puede eliminar esta categoría porque tiene proyectos asociados.');
            }

        });
    }
}
