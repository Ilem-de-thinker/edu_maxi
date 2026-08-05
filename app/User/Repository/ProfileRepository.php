<?php

namespace App\User\Repository;

use App\Models\Profile;


class ProfileRepository{
      protected const COMPLETION_FIELDS = [
        'first_name',
        'last_name',
        'phone',
        'bio',
        'address',
        'state',
        'country',
        'field_of_study_id',
        'avater',
        'socials',
    ];

    public static function getProfileCompletionPercentage(Profile $profile): int
    {
        $completed = collect(self::COMPLETION_FIELDS)
            ->filter(fn ($field) => filled($profile->{$field}))
            ->count();

        $completed_field_count = count(self::COMPLETION_FIELDS);

        return (int) round(
            ($completed / $completed_field_count) * 100
        );
    }

}
