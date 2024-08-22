<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'delivery_address', 'delivery_method', 'bouquet_id',
    ];

    public function bouquet()
    {
        return $this->belongsTo(Bouquet::class);
    }
}
