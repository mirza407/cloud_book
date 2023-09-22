<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;
    public function parent() {
        return $this->belongsTo(Section::class, 'parent_id');
    }

    public function children() {
        return $this->hasMany(Section::class, 'parent_id');
    }

    public function deleteRecursive()
    {
        $this->children->each(function ($child) {
            $child->deleteRecursive();
        });

        $this->delete();
    }
}
