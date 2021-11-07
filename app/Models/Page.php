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


    const PLACE_TOP = 'top';
    const PLACE_MIDDLE = 'middle';
    const PLACE_MIDDLE_SECTION_1 = 'middle_section_1';
    const PLACE_MIDDLE_SECTION_2 = 'middle_section_2';
    const PLACE_MIDDLE_SECTION_3 = 'middle_section_3';
    const PLACE_BOTTOM = 'bottom';

}
