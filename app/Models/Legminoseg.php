<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Legminoseg extends Model
{
    use HasFactory;
    public $table = "legminosegek";
    public $primaryKey = "l_id";
    public $timestamps = false;
    public $guarded = [];
}
