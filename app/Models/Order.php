<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'Pizza',
        'user_id',
        'total_cost',
        'ordered_by',
        'quantity_pizza',
    ];
    protected $table = 'orders';
    protected $primaryKay = 'id';
    public function userb(){
        return $this->belongsTo(User::class, 'user_id');
    }
}