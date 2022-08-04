<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThemeSetting extends Model
{
    use HasFactory;
    protected $fillable = [
        "phrasing",
        "impact_text_color",
        "units_text_color",
        "text_color",
        "icon_color",
        "icon_background_color",
        "box_background_color",
        "use_arbor_fonts"
    ];
}
