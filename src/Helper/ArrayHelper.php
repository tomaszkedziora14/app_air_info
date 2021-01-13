<?php

namespace App\Helper;


class ArrayHelper
{
   /**
    *  searches the array for a given value and returns the first key and all keys and values
    *
    * @param string $search
    * @param array $data
    * @return array
   */
   public function searchThroughArray(string $search,array $data): array
   {
	foreach ($data as $key => $value) {
	   if(is_array($value)){
	      array_walk_recursive($value, function($v, $k) use($search ,$key,$value,&$val)
           {
           if(strpos($v, $search) !== false )
                  $val[$key]=$value;
           });
	   }else{
	      if(strpos($value, $search) !== false )
	               $val[$key]=$value;
	      }
           }
	       return $val;
	 }
   }
