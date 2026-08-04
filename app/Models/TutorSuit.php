<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Fillable('user_id', 'suit_name', 'suit_pass_key', 'phone', 'accounts')]
class TutorSuit extends Model
{
    use HasUuids;

    protected function casts(): array
    {
        return [
            'accounts' => 'array',
        ];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo('User');
    }
}
