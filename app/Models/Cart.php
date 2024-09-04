<?php

namespace App\Models;

use App\Models\Drug;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cart extends Model
{
    use HasFactory;
    public $incrementing = false;
    protected $guarded = [];
    public $primaryKey = 'uuid';
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    protected static function booted()
    {
        static::addGlobalScope('cart',function(Builder $builder){
            $builder->where('user_id',Auth::id());
        });
        static::creating(function(Cart $cart){
            $cart->uuid = Str::uuid();
            $cart->user_id = Auth::id();
        });
    }
    public function setQuantityAttribute($value)
    {
        $this->attributes['quantity'] = $value;

        // Retrieve the item associated with this order item
        $drug = Drug::findOrFail($this->drug_id);

        // Calculate the new price based on the quantity
        if ($value == 1) {
            $this->attributes['total'] = $drug->price;
        } else {
            $this->attributes['total'] = $drug->price * $value;
        }
    }
}
