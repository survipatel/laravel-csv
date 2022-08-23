<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class Financial_trans extends Model
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
        'amount',
         'crdr',
         'tranDate',
         'acadYear',
        'Entrymode',
         'voucherno',
        'brid',
         'Type_of_consession',
         
    ];
}
