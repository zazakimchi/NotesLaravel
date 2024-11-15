<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class notesListing extends Model
{
    use HasFactory;

    protected $table = 'notes_listing';

    protected $guarded = [];

    protected $fillable = ['topic', 'notes'];


}
