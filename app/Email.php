<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    //
    protected $table = "cliente_email";
    public $timestamps = false;
    protected $guarded = [];
}
