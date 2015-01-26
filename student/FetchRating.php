<?php
class FetchRating{
	public function rating()
	{
		return[
			isset($_POST['1'])?(int)$_POST['1']:NULL,
			isset($_POST['2'])?(int)$_POST['2']:NULL,
			isset($_POST['3'])?(int)$_POST['3']:NULL,
			isset($_POST['4'])?(int)$_POST['4']:NULL,
			isset($_POST['5'])?(int)$_POST['5']:NULL,
			isset($_POST['6'])?(int)$_POST['6']:NULL,
			isset($_POST['7'])?(int)$_POST['7']:NULL,
			isset($_POST['8'])?(int)$_POST['8']:NULL,
			isset($_POST['9'])?(int)$_POST['9']:NULL,
			isset($_POST['10'])?(int)$_POST['10']:NULL,
			isset($_POST['11'])?(int)$_POST['11']:NULL,
			isset($_POST['12'])?(int)$_POST['12']:NULL,
			isset($_POST['13'])?(int)$_POST['13']:NULL,
			isset($_POST['14'])?(int)$_POST['14']:NULL,
			isset($_POST['15'])?(int)$_POST['15']:NULL,
			isset($_POST['16'])?(int)$_POST['16']:NULL,
			isset($_POST['17'])?(int)$_POST['17']:NULL,
			isset($_POST['18'])?(int)$_POST['18']:NULL,
			isset($_POST['19'])?(int)$_POST['19']:NULL,
			isset($_POST['20'])?(int)$_POST['20']:NULL
		];	
	}
}
$rating=new FetchRating();
var_dump($rating->rating());
//update table

?>