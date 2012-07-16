<?php
	/**
	* Modufier "pluralform": array & int => associated plural form by number
	*
    * @param forms $array
    * @param number $integer
	* @return string
	*/

	function smarty_modifier_pluralform($number, $forms){
		global $Language;

		if(!$forms || $number < 0){
            trigger_error('Modifier pluralform: no forms given!');
			return '';
		}else{
            return $number%10==1&&$number%100!=11?$forms[0]:($number%10>=2&&$number%10<=4&&($number%100<10||$number%100>=20)?$forms[1]:$forms[2]);
        };
	};
?>