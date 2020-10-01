<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;

class DataTrafo extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id', 'create_at', 'updated_at'];
    protected $dates = ['deleted_at'];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
