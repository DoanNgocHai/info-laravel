<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 'information';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'address', 'phone', 'year'];
}
