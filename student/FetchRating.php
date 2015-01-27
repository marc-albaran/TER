<?php
class FetchRating{
	public function rating()
	{
		return[
			isset($_POST['item1'])?(int)$_POST['item1']:NULL,
			isset($_POST['item2'])?(int)$_POST['item2']:NULL,
			isset($_POST['item3'])?(int)$_POST['item3']:NULL,
			isset($_POST['item4'])?(int)$_POST['item4']:NULL,
			isset($_POST['item5'])?(int)$_POST['item5']:NULL,
			isset($_POST['item6'])?(int)$_POST['item6']:NULL,
			isset($_POST['item7'])?(int)$_POST['item7']:NULL,
			isset($_POST['item8'])?(int)$_POST['item8']:NULL,
			isset($_POST['item9'])?(int)$_POST['item9']:NULL,
			isset($_POST['item10'])?(int)$_POST['item10']:NULL,
			isset($_POST['item11'])?(int)$_POST['item11']:NULL,
			isset($_POST['item12'])?(int)$_POST['item12']:NULL,
			isset($_POST['item13'])?(int)$_POST['item13']:NULL,
			isset($_POST['item14'])?(int)$_POST['item14']:NULL,
			isset($_POST['item15'])?(int)$_POST['item15']:NULL,
			isset($_POST['item16'])?(int)$_POST['item16']:NULL,
			isset($_POST['item17'])?(int)$_POST['item17']:NULL,
			isset($_POST['item18'])?(int)$_POST['item18']:NULL,
			isset($_POST['item19'])?(int)$_POST['item19']:NULL,
			isset($_POST['item20'])?(int)$_POST['item20']:NULL,
			isset($_POST['comment'])?$_POST['comment']:NULL
		];	
	}
}
$rating=new FetchRating();
var_dump($rating->rating());
//update table

?>