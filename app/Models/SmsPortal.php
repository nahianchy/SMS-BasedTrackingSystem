<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SmsPortal extends Model
{
    use HasFactory;
    public $table = "sms";

    protected $guarded = [];
}
