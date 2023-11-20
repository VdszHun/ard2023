<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homerseklet extends Model
{
    use HasFactory;
    public $table = "homersekletek";
    public $primaryKey = "h_id";
    public $timestamps = false;
    public $guarded = [];
}
