<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transactions';
    protected $guarded = [''];

    const STATUS_DONE = 1;
    const STATUS_DEFAULT = 0;
}
