<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class souphanithItem extends Model
{
    use HasFactory;

    public $fillable = [
        'name',
        'surname',
        'position'
    ];

    // protected $table = 'souphanith_items';
    // protected $primarykey = 'id';
    // protected $fillable = ['name', 'surname' ,'position'];
}
