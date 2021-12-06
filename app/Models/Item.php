<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $table = 'items';
    protected $fillable = ["item_code", "name", "number_register", "brand", "size", "material", "purchased", "no_factory", "no_frame", "no_machine", "no_police", "no_bpkb", "origin", "price", "description"];
}
