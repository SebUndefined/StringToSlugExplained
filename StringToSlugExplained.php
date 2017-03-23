<?php
protected function stringToSlugExplained($string)
	{
    		//Convert the characteres in eligible HTML one. The way of encoding is UTF-8 and we say it at the third argument.
    		//We include the quotes (simple and double) by the second argument (ENT_QUOTES)
		$string = htmlentities($string, ENT_QUOTES, 'UTF-8');
    		//Replacing the charactere (from a to z) between '&' and ';'
		$string = preg_replace('~&([a-z]{1,2})(?:acute|cedil|circ|grave|lig|orn|ring|slash|copy|th|tilde|uml);~i', '$1', $string);
		//Decode the html entity such as < and > (&lt;), after this line, the < and > of potential (for example)
    		// html code will appears again
		$string = html_entity_decode($string, ENT_QUOTES, 'UTF-8');
    		//For all the characteres which are not present between 0 and 9 AND a and z, we replace it by '-'
		$string = preg_replace('~[^0-9a-z]+~i', '-', $string);
    		//By the foloowing line, we delete the '-' at the beggining of the string and at the end
		$string = trim($string, '-');
   		 //Finally, we convert the string to lower letters only. 
		$string = strtolower($string);
    		//And !!!!! We just return the string :)
		return $string;
	}
?>
