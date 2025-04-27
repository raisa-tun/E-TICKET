<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Testing\Fakes\BusFake;

class Bus_overview extends Model
{
    use HasFactory;

    protected $fillable = ['bus_brand_name', 'total_bus_no', 'available_bus_no'];

    public function details(): HasMany
    {
        return $this->hasMany(Bus_details::class, 'bus_id', 'id');
    }
}
