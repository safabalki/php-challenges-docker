<?php 

class StringChallenge
{

 	/**
     * Sort elements in array by last word
     *
     * @return Array
     */
 	public function sortStringArrByLastWord($str = "")
 	{
 		if(gettype($str) == "string"){
 			$str = trim($str);

			//Splice of array by space character
 			$this->strArr = explode(" ",  $str);

 			$tempStrArr = [];

	 		//Create temp array with the last characters of the elemnts in array for sort elements by key
	 		foreach ($this->strArr as $index => $str) {
	 			$tempStrArr[substr($str, -1).$index] = $str;
	 		}

	 		//Sort elements in string array by key
	 		ksort($tempStrArr);

	 		$tempStrArr = array_values($tempStrArr);

	 		return $tempStrArr;

 		}else{
 			return "Hatalı Parametre";
 		}
 	}
} 

?>