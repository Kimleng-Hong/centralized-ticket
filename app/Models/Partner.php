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
        'industry',
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
        return $this->belongsTo(User::class, 'id');
    }
}
