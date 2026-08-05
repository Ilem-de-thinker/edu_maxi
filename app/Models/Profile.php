<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Represents the profile of a user.
 *
 * @property int $user_id
 * @property int|null $field_of_study_id
 * @property string|null $avater
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $phone
 * @property string|null $bio
 * @property string|null $address
 * @property string|null $state
 * @property string|null $country
 * @property int|null $following_count
 * @property int|null $followers_count
 * @property array<string, mixed>|null $socials
 */
class Profile extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'user_id', 'field_of_study_id', 'avater', 'first_name',
        'last_name', 'phone', 'bio', 'address', 'state', 'country',
        'following_count', 'followers_count', 'socials',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'socials' => 'array',
        ];
    }

    /**
     * The field of study associated with this profile.
     *
     * @return BelongsTo<FieldOfStudy, $this>
     */
    public function fieldOfStudy(): BelongsTo
    {
        return $this->belongsTo(FieldOfStudy::class);
    }

    /**
     * The user this profile belongs to.
     *
     * @return BelongsTo<User, $this>
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
