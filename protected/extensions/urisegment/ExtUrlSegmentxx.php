<?php
class ExtUrlSegment extends CApplicationComponent
{
	public static function Segment($part)
	{
		$segementsArr = explode('/', Yii::app()->request->pathInfo);

	    if (!empty($segementsArr[$part-1])) return $segementsArr[$part-1];
	    
	    return false;
	}

	public static function createSlug($slug)
	{
		$letterNumbersSpacesHypens='/[^\-\s\pN\pL]+/u';
		$spaceDuplicateHypens='/[\-\s]+/';

		$slug = preg_replace($letterNumbersSpacesHypens,'',mb_strtolower($slug,'UTF-8'));
		$slug = preg_replace($spaceDuplicateHypens,'-', $slug);
		$slug = trim($slug,'-');

		return $slug;
	}
	
}
