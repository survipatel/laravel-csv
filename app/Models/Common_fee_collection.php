<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Common_fee_collection extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'moduleid',
         'transId',
        'admno',
         'rollno',
        'amount',
         'brid',
        'acadmicYear',
         'financialYear',
        'displayReceiptNo',
         'Entrymode',
        'PaidDate',
         'inactive',
        

       
    ];
}
