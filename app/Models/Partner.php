<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;
    protected $table = 'companies';
    protected $primaryKey = 'id';
    protected $fillable = [
        'user_id',
        'name',
        'description',
        'industry_id',
        'location',
        'address',
        //TODO'established_in',
        'website',
        'facebook',
        'intagram',
        'linkedin',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

        public function industry()
    {
        return $this->belongsTo(Industry::class, 'industry_id', 'id');
    }

        public function location()
    {
        return $this->belongsTo(Location::class, 'location_id', 'id');
    }
}
