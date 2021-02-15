<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $table = 'application';

    protected $fillable = [
        'application_id',
        'comments',
        'freelance_id',
        'order_id',
    ];

    protected $visible = [
        'application_id',
        'comments',
    ];

}
