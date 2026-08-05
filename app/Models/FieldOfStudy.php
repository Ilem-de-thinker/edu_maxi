<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;

/**
 * Represents an area of study that can be assigned to a profile.
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 */
class FieldOfStudy extends Model
{
    use AsSource;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = ['name', 'slug'];
}
