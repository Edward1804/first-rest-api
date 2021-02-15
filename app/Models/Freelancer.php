<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Freelancer extends Model
{

    protected $table = 'freelancer';

    protected $fillable = [
        'freelancer_id',
        'name',
        'price',
        'email',
        'phone',
    ];

    protected $visible = [
        'freelancer_id',
        'name',
        'price',
        'email',
        'phone',
    ];

}
