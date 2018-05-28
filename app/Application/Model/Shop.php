<?php

namespace App\Application\Model;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{

  public $table = "shops";


   protected $fillable = [
     'name','etat','image'

   ];

   public function validation($id){
        return [
          'name' => 'required',
          'etat' => 'required',
          'image' => 'required'
        ];
   }

   public function updateValidation($id){
           return [
             'name' => 'required',
             'etat' => 'required',
             'image' => 'required'
           ];
   }

}
