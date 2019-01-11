<?php
namespace App\Models;

class TestModel extends BaseModel
{
    protected $table = 'test';
//    protected $connection = 'mysql';
 //   protected static $unguarded = true;
    public $timestamps = false;

    protected $fillable = [
        'name',
        'age'
        ];
}
