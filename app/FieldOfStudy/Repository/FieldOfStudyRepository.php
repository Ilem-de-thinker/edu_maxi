<?php

namespace App\FieldOfStudy\Repository;

use App\Models\FieldOfStudy;
use Illuminate\Database\Eloquent\Collection;

/**
 * Provides read access to field of study records.
 */
class FieldOfStudyRepository
{
    /**
     * Retrieve the most recently created fields of study.
     *
     * @return Collection<int, FieldOfStudy>
     */
    public static function getAll(): Collection
    {
        return FieldOfStudy::latest()->get();
    }
}
