<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Project extends Model
{
    public function taxonomy()
    {
        return $this->belongsTo(Taxonomy::class, 'taxonomy_id');
    }

    protected static function booted()
    {
        static::creating(function ($product) {

            if (!request()->hasFile('imagen')) {

                throw \Illuminate\Validation\ValidationException::withMessages([
                    'imagen' => 'La imagen es obligatoria.'
                ]);

            }

        });
    }
}
