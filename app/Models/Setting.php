<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    const PATH_LOGO = 'images/admin/logo/';
    const PATH_FAVICON = 'images/admin/favicon/';
    const PATH_FOOTER_IMG = 'images/admin/footer/';

}
