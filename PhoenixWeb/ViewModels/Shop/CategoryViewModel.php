<?php
/*
 *  FCD Apps APIs - PHP Framework
 *  Home Controller Class
 * 
 *  (c) 2016 Milliken & Co. - Milliken Floors
 *  @author: Christopher Rains < christopher.rains@milliken.com >
 *  @date: 6 January 2016
 */

namespace PhoenixWeb\ViewModels\Shop {

    use \Orion\v1\Web\Mvc\Core\Classes\BaseViewModel;
    use \Orion\v1\Web\Mvc\Modules\Classes\Config;
    use \Orion\v1\Web\Mvc\Modules\Classes\Log;
    
    class CategoryViewModel extends BaseViewModel {

        private $razr;

        public function __construct(Config $Config, Log $Log) {
            parent::__construct($Config, $Log);
            $this->razr = new \Razr\Engine(new \Razr\Loader\FilesystemLoader(__DIR__ . "\\..\\..\\Views"));
        }
        
        public function __destruct() {
            parent::__destruct();
        }

        public function render() {
            $uri =  $_SERVER['REQUEST_URI'];
            $ViewData['search'] = mb_str_replace("-", " ", substr($uri, strrpos($uri, "/") + 1));
            $ViewData['title'] = "Shop | Peak Outdoor Adventure";
            $ViewData['copyright'] = date("Y");
            $ViewData['stylesheets'] = [
                "index",
                "shop"
            ];
            $ViewData['javascript'] = [
                "jquery",
                "shop"    
            ];
            $products = json_decode(file_get_contents(__DIR__ . "\\..\\..\\Data\\products.json"));
            foreach($products as $product) {
                if(mb_strtolower($product->category) === mb_strtolower($ViewData['search'])) {
                    $ViewData['products'][] = $product;
                }
            }
            foreach($products as $product) {
                $ViewData['categories'][] = $product->category;
            }
            $ViewData['categories'] = array_unique($ViewData['categories']);
            foreach($products as $product) {
                $ViewData['collections'][] = $product->collection;
            }
            $ViewData['collections'] = array_unique($ViewData['collections']);
            echo $this->razr->render('Templates\\Shop\\index.razr.php', $ViewData);
        }
    
    }

}