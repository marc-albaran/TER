<?php
session_start();

if($_SESSION['user_type']=='d'){
		echo "admin ko diri";
}
else
{
		echo "faculty ko diri";

}
?>
