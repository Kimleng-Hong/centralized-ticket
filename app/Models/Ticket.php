<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $table = 'tickets';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'description',
        'price',
        'partner_id',
        'employee_id',
        'partner_approval',
    ];

    public function partner()
    {
        return $this->belongsTo(Partner::class);
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function purchase()
    {
        return $this->hasMany(TicketPurchase::class, 'ticket_id', 'id');
    }
}
