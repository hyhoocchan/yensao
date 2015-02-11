<?php
require_once 'app/Mage.php';
Mage::app();
Mage::app()->getStore()->setId(Mage_Core_Model_App::ADMIN_STORE_ID);
$imagesMap = array(
	26=>'IMG_0210.jpg',
	27=>'IMG_0211.jpg',
	28=>'IMG_0221.jpg',
	29=>'IMG_0227.jpg',
	30=>'IMG_0243.jpg',
	31=>'IMG_0263.JPG'
);
$importDir = Mage::getBaseDir('media') . DS . 'incoming'.DS;

foreach($imagesMap as $k=>$v){
	$ourProduct = Mage::getModel('catalog/product')->load($k);
	$filePath = $importDir.$v;
	if (file_exists($filePath)) {
		$ourProduct->addImageToMediaGallery($filePath, array('image', 'small_image', 'thumbnail'), false, false);
		$ourProduct->save();
		echo $ourProduct->getSku() . " done<br />";
	} else {
		echo $ourProduct->getSku() . " not done<br />";
	}
}
?>