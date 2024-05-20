<?php
include('banco.php');

if(isset($_SESSION['email']) && !empty($_SESSION['email'])){

}else{
    header("Location: index.php");
    exit; 
}
