<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = [];
    protected $casts = [
        'created_at' => 'date:Y-m-d',
        'updated_at' =>'date:Y-m-d'
    ];
    public function drugs ()
    {
        return $this->hasMany(Drug::class);
    }
    public function scopeActive()
    {
    }
    public function scopeFilter(Builder $builder, $filter)
    {
        $builder->when($filter["search"] ?? false,function ($builder, $value){
            $builder->where("ar_name","LIKE","%{$value}%");
        });

        $builder->when($filter["search"] ?? false,function ($builder, $value){
            $builder->orWhere("en_name","LIKE","%{$value}%");
        });
    }

    // protected static function booted()
    // {
    //     static::addGlobalScope('status', function ($builder) {
    //         $builder->where('status', 'active');
    //     });
    // }
}
