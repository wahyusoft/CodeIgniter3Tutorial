<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Description of My_Composer
 *
 * @author wahyu widodo
 */
class Mycomposer {
    
    function __construct() {
        // require the Composer autoloader
        include("./vendor/autoload.php");
        // disable DOMPDF's internal autoloader if you are using Composer
        define('DOMPDF_ENABLE_AUTOLOAD', false);
        define('DOMPDF_ENABLE_REMOTE',true);
        // include DOMPDF's default configuration
        require_once './vendor/dompdf/dompdf/dompdf_config.inc.php';
    }
    
    
    
}
