<?php 
require_once("include/initialize.php");
	 if (!isset($_SESSION['IDPEGAWAI'])){
      redirect(WEB_ROOT."loginform.php");
     } 
$title=""; 
$content='home.php';
$view = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
switch ($view) {
	case '1' :
        // $title="Home";	
		// $content='home.php';	
		
		if ($_SESSION['EMPPOSITION']=='Administrator') {
				# code... 

			$content='home.php';
		}	
		break;	
	default :
		if ($_SESSION['EMPPOSITION']=='Employee') {
				# code...
			redirect('orders/');

		}	
		if ($_SESSION['EMPPOSITION']=='Administrator') {
				# code... 

			$content='home.php';

		}
	    // $title="Home";	
		// $content ='home.php';		
}
require_once("tema/template.php");
?>