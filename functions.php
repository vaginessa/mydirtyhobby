<?php 
  /**
   * Truncate text and add ellipsis(...)
   * @param  $string   
   * @param  $limit    
   * @param  $ellipsis 
   * @return string          
   */
function truncate($string, $limit, $ellipsis="...") {    
    $stringLength = strlen($string);
    // If the string is less than our limit
    if($stringLength <= $limit) {
      // If the last character is not a dot(.) 
      // add the dot(.) and return the string
        if(substr($string, -1)  != '.' ){
          return $string . '.';
        }   
      // else return the string as it is
      return $string;
   }
   // Remove the extra text 
  $string = substr($string, 0, $limit);

  // Return the string with ellipsis
   return $string . $ellipsis;
}






 ?>