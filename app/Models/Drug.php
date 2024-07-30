<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Drug extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = [];
    public function category ()
    {
        return $this->belongsTo(Category::class)->withDefault([
            'en_name' => 'No Category',
        ]);
    }
    public function scopeFilter (Builder $builder, $filter)
    {
        $builder->when($filter['search'] ?? null, function ($builder, $value) {
                $builder->where('en_name', 'like', '%'.$value.'%')
                    ->orWhere('ar_name', 'like', '%'.$value.'%');
            });
    }
    public function images ()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
    protected static function booted()
    {
        static::addGlobalScope('status', function ($builder) {
            $builder->where('status', 'active');
        });
    }
}
