<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    use HasFactory;
    protected  $table= 'donations';
    protected  $primaryKey='id';
    protected  $fillable=['descripcion','monto','fecha','id_proyecto'];
    protected  $guarded=[];
  

}
