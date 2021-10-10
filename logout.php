<?php 
require_once 'include/initialize.php';
// Four steps to closing a session
// (i.e. logging out)

// 1. Find the session
@session_start();


unset( $_SESSION['IDPEGAWAI'] );
unset( $_SESSION['NAMAPEGAWAI'] );
unset( $_SESSION['NIP'] );
unset( $_SESSION['PASSWRD'] );
unset( $_SESSION['ACCSTATUS'] );
unset( $_SESSION['EMPPOSITION'] );
// 4. Destroy the session
// session_destroy();
redirect(WEB_ROOT."loginform.php?logout=1");

?>