<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Historic extends Model
{

    use Notifiable;
    
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id','type', 'amount', 'total_before', 'total_after', 'user_id_transaction', 'date'
    ];

}
