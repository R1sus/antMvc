<?
function getJSUrl($fileName) {
	return '/views/layout/js/'.$fileName.'.js';

}

function getCSSUrl($fileName) {
	return '/views/layout/css/'.$fileName.'.css';

}

function getImgUrl($fileName) {
	return "/views/layout/img/" . $fileName;

}
function getViewPart($fileName) {
	return '/views/layout/'.$fileName;

}
function getImgUrlPort($fileName) {
	return "/views/portfolio_page/img/" . $fileName;

}



?>