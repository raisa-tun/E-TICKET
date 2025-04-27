<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Bus_details extends Model
{
    use HasFactory;
    protected $primaryKey = 'id'; // this is default, but include it just in case
    public $incrementing = true;
    protected $keyType = 'int';
    protected $fillable = [
        'code_no',
        'total_seats',
        'price',
        'available_seats',
        'start_point',
        'end_point',
        'departure_time',
        'arrival_time',
        'ac_or_non_ac'
    ];

    public function bus_overview(): BelongsTo
    {
        return $this->belongsTo(Bus_overview::class, 'bus_id', 'id');
    }
}
