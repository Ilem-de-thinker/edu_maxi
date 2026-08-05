<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Represents a tutor suit owned by a tutor.
 *
 * @property int $user_id
 * @property string $suit_name
 * @property string|null $suit_pass_key
 * @property string|null $phone
 * @property array<string, mixed>|null $accounts
 */
#[Fillable('user_id', 'suit_name', 'suit_pass_key', 'phone', 'accounts')]
class TutorSuit extends Model
{
    /**
     * The attributes that should be cast to native types.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'accounts' => 'array',
        ];
    }

    /**
     * The user this tutor suit belongs to.
     *
     * @return BelongsTo<User, $this>
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
