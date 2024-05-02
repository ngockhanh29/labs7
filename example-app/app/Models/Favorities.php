<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorities extends Model
{
    use HasFactory;

    protected $table = 'favorities';

    protected $primaryKey = 'favorite_id';

    public $incrementing = true;

    /**
     * Relationship many to many
     * @return HasMany
     */
    public function favorities(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
}
