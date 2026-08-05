<?php

namespace App\FieldOfStudy\Services;

use App\FieldOfStudy\DataTransferObjects\CreateFieldOfStudyDTO;
use App\Models\FieldOfStudy;

/**
 * Handles persistence of field of study records.
 */
class FieldOfStudyService
{
    /**
     * Create a new field of study from the given data.
     */
    public static function create(CreateFieldOfStudyDTO $createFieldOfStudyDTO): FieldOfStudy
    {
        return FieldOfStudy::create([
            'name' => $createFieldOfStudyDTO->name,
            'slug' => $createFieldOfStudyDTO->slug,
        ]);
    }

    /**
     * Delete the field of study with the given identifier.
     */
    public static function delete(int $id): void
    {
        $fieldOfStudy = FieldOfStudy::findOrFail($id);
        $fieldOfStudy->delete();
    }
}
