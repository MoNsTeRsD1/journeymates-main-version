<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class tblplaces extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "tblplaces";
    protected $primaryKey = 'id';
    protected $fillable = [
        'place_name',
        'place_description',
        'place_ratings',
        'place_picture',
        'page_viewer_count',
    ];


}