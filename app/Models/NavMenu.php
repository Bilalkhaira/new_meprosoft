<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NavMenu extends Model
{
    protected $guarded = [];

    public function children()
    {
        return $this->hasMany(NavMenu::class, 'parent_id')->where('status', 'active');
    }

    public function parent()
    {
        return $this->belongsTo(NavMenu::class, 'parent_id');
    }
}
