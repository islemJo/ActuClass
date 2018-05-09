<?php
//define('CONSTANT','rien');//
//echo CONSTANT;
//define('WEBROOT',dirname(__FILE__));

?>
<!--
<pre>
<?php //print_r($_SERVER);?>
<?php //echo dirname(__FILE__);?>

</pre>
-->

<?php
    define('WEBROOT',dirname(__FILE__));// avoir le dossier webroot
    define('ROOT',dirname(WEBROOT));// avoir le dossier site
    define('DS',DIRECTORY_SEPARATOR);//le separateur des fichier selon le system
    define('CORE',ROOT.DS.'core');
    define('BASE_URL',dirname(dirname($_SERVER['SCRIPT_NAME'])));// avoir la base de site par exemple ActuClass

    require CORE.DS.'Includes.php'; // include le fichier Include
    new Dispatcher();
?>
