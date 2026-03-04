<?php



function getAllCategory(){

	return db_fetch_array("SELECT * FROM `tbl_category`");
}

function getAllBrand(){

	return db_fetch_array("SELECT * FROM `tbl_brand`");
}

function insert_product($data){

	return db_insert("tbl_product", $data);
}


function getAllProduct(){

	return db_fetch_array("SELECT * FROM `tbl_product`");
}

function searchProductByName($keyword){
	$keyword = escape_string($keyword);
	return db_fetch_array("SELECT * FROM `tbl_product` WHERE `name` LIKE '%$keyword%'");
}

function get_category_by_id($id){

	$data = db_fetch_array("SELECT * FROM `tbl_category` WHERE `id` = '$id'");
	return $data[0]['name'];
}

function get_brand_by_id($id){

	$data = db_fetch_array("SELECT * FROM `tbl_brand` WHERE `id` = '$id'");
	return $data[0]['name'];
}


function delete_product_by_id($id){
	// Xóa các bản ghi liên quan trong tbl_detail_order trước
	db_delete("tbl_detail_order", "`id_product` = '$id'");
	return db_delete("tbl_product", "`id` = '$id'");
}