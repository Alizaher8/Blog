<?php

namespace App\Traits;


trait ImagesTrait
{
    

  public function saveImage($photo,$path)
 {
   
    $file_extension = $photo->getClientOriginalName();
    $file_name=time().'.'.$file_extension;
    $photo->move($path,$file_name);
   
    return $file_name;



 }







}