<?php

namespace App\FieldOfStudy\DataTransferObjects;

use Illuminate\Support\Str;

/**
 * Data transfer object carrying the payload for creating a field of study.
 *
 * @property string $name The name of the field of study.
 * @property string|null $slug The slug of the field of study.
 */
class CreateFieldOfStudyDTO
{
    public function __construct(
        public string $name,
        public ?string $slug = null,
    ) {
        $this->slug = $slug ?? Str::slug($name);
    }
}
