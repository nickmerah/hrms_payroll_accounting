<?php  error_reporting(0);
		  $dbhost = 'localhost';
         $dbuser = 'fabaport_user';
         $dbpass = 'j*2#4iQbx4^g';
		 $dbname = 'fabaport_lannisterpay';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
   
         if(! $conn ){
            die('What exactly is your wish! ' . mysqli_error());
         }
          
         
$baseurl = "https://209.205.209.34/~fabaport/tcti/public";
$baseurl_links = "https://209.205.209.34/~fabaport/tcti/public/reports";


function getdeptname($sid){
	global $conn;
	  $sql="SELECT   deptname  from departments   where  deptid = '$sid'  ";
 $ret=mysqli_query($conn,$sql);
 $cashbook=mysqli_fetch_object($ret);
 return $cashbook->deptname;
}
?>
