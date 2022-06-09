<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table = 'employees';
    protected $primaryKey = 'id';
    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'partner_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }

    public function partner()  
    {
        return $this->belongsTo(Partner::class);
    }

    public function ticket()
    {
        return $this->hasMany(Ticket::class, 'employee_id', 'id');
    }
}
