<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommonConnection extends Model
{
    use HasFactory;
    protected $table = 'common_connections';

    protected $fillable = ['first_user_id', 'second_user_id', 'common_user_id'];

    public function user1()
    {
        return $this->belongsTo(User::class, 'first_user_id');
    }

    public function user2()
    {
        return $this->belongsTo(User::class, 'second_user_id');
    }

    public function commonUser()
    {
        return $this->belongsTo(User::class, 'common_user_id');
    }
}
