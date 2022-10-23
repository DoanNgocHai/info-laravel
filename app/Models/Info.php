<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Info extends Model
{
    use HasFactory;
    protected $table = 'information';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'address', 'phone', 'year'];


}
