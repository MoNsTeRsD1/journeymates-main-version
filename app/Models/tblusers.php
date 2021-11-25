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
    protected $primaryKey = 'id';
    protected $fillable = [
        'FullName',
        'MobileNumber',
        'EmailId',
        'Password',
        'RegDate',
        'UpdationDate',
    ];


}