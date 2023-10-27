<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Checkout extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['user_id','camp_id','card_number','expired', 'cvc', 'is_paid'];

    // jika atribut expired di panggin maka fungsi ini akan di jalankan
    public function setExpiredAttribute($value){
        $this->attributes['expired'] = date('Y:m:t',strtotime($value));
    }

    /**
     * Get the camp that owns the Checkout
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */     
    public function Camp(): BelongsTo
    {
        return $this->belongsTo(Camp::class);
    }

    /**
     * Get the user that owns the Checkout
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
