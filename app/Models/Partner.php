<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;
    protected $table = 'partners';
    protected $primaryKey = 'id';
    protected $fillable = [
        'user_id',
        'name',
        'description',
        'industry_id',
        'location_id',
        'address',
        //TODO'established_in',
        'website',
        'facebook',
        'intagram',
        'linkedin',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function industry()
    {
        return $this->belongTo(Industry::class);        
    }

    public function location()
    {
        return $this->belongsTo(Location::class);
    }
}
