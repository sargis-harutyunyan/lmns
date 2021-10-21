<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'place',
        'header',
        'content',
        'image',
        'status',
        'cretated_at',
        'updated_at',
    ];

    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 0;



    const HOME = 'home';
    const ABOUT = 'about';

    const PLACE_VISION = 'vision';
    const PLACE_MISSION = 'mission';

}
