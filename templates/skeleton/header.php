<?php

if(!empty($_SESSION)){
    require 'headerconnect.php';
} else {
    require 'headerdisconnect.php';
}
