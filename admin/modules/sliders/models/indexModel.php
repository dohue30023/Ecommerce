<?php



function getAllSlider(){

	return db_fetch_array("SELECT * FROM `tbl_slider`");
}

function searchSliderByType($keyword){
	$keyword = escape_string($keyword);
	return db_fetch_array("SELECT * FROM `tbl_slider` WHERE `type` LIKE '%$keyword%'");
}

function insert_slider($data){

	return db_insert("tbl_slider", $data);
}

function delete_slider_by_id($id){

	return db_delete("tbl_slider", "`id` = '$id'");
}