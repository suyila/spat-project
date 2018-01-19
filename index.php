<?php
require_once 'functions/CommonFunctions.php';
session_start();
sessionInitialize();
    require_once 'nav.html';
    require_once 'Pages/Employees.phtml';
    echo '<script type="text/javascript">',
        'document.getElementById("adminWrapper").style.display = "block";',
        'document.getElementById("adminOptSmall").style.backgroundColor = "#D7342B";',
        'document.getElementById("adminOpt").style.backgroundColor = "#D7342B";',
        '</script>';
    
?>
