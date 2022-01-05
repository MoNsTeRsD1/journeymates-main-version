<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class tblusers extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "tblusers";
    protected $primaryKey = 'user_id';
    protected $fillable = [
        'fname',
        'mnumber',
        'email',
        'password',
        'RegDate',
        'UpdationDate',
        'updated_at',
        'created_at',
    ];


}