<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketPurchase extends Model
{
    use HasFactory;
    protected $table = 'ticket_purchases';
    protected $primaryKey = 'id';
    protected $fillable = [
        'user_id',
        'ticket_id',
        'ref_number',
        'purchases_date'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }
}
