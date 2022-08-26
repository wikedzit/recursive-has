<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'category_id'];

    public function categories () {
        return $this->hasMany(self::class);
    }

    public function category() {
        return $this->belongsTo(self::class);
    }

    public function getParentChain() {
        $parent = [];
        if ($this->category) {
            $parent[] = $this->category->name;
            $parent = array_merge($parent, $this->category->getParentChain());
        }

        return $parent;
    }
}
