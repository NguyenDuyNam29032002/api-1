<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static truncate()
 * @method static create(array $all)
 * @method static find($id)
 */
class Article extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'body'];
}
