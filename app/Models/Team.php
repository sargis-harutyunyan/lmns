<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table = 'team';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'first_name',
        'last_name',
        'position',
        'social_link',
        'image',
        'cretated_at',
        'updated_at',
    ];
}
