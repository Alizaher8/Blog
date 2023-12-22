<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notify extends Model
{
    use HasFactory;
    protected $table='notifies';
    protected $fillable=['content','type','user_id','post_id','comment_id'];


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
