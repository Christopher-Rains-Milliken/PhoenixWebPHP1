<?php
/*
 *  FCD Apps APIs - PHP Framework
 *  Home Controller Class
 * 
 *  (c) 2016 Milliken & Co. - Milliken Floors
 *  @author: Christopher Rains < christopher.rains@milliken.com >
 *  @date: 6 January 2016
 */

namespace FcdAppsApis\Controllers {

    use \Orion\v1\Web\Mvc\Core\Classes\BaseController;
    use \Orion\v1\Web\Mvc\Modules\Classes\Config;
    use \Orion\v1\Web\Mvc\Modules\Classes\Log;
    use \FcdAppsApis\Interfaces\Controllers\HomeController as IHomeController;
    
    class HomeController extends BaseController implements IHomeController {

        public function __construct(Config $Config, Log $Log) {
            parent::__construct($Config, $Log);
        }
        
        public function __destruct() {
            parent::__destruct();
        }

        public function ActionIndex() {
            echo "Action Index loaded!";
        }
    
    }

}