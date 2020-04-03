<?php 

require 'vendor/autoload.php';

use Huykhoong\AppStoreGrabber\AppStore;

$entity = 'software'; // Software App
$country = 'us'; // Support language: https://rss.itunes.apple.com/en-us/language
$appId = '292374531'; // App ID from URL

// Scrape APp info from ID
$app = AppStore::App()->getApp($appId,$entity,$country);

echo '<pre>' . var_export($app, true) . '</pre>';
// // Get comment
// $page = 1; // Page 
// $sort = 'RECENT'; // ['RECENT', 'HELPFUL']
// $comments = AppStore::Comments()->getComments($appId,$country,$page,$sort);

// // Get Developer info
// $devId = 292374531;// Developer ID
// $developer = AppStore::Developer()->getDeveloperMetadata($devId,$country);
// //Get apps by Dev
// $developerApp = AppStore::Developer()->getDevApp($devId,$country);

// // Get by rating by ID
// $ratings = AppStore::Ratings()->getRatings($appId,$country);

// //Search by keyword
// $keyword = 'freefire';
// $search = AppStore::Search()->getAppByKeyword($keyword);
// //判断指定 App 在第几位
// $search = AppStore::Search()->getAppRankByKeyword($keyword,$appId);

// //Get List from RSS https://rss.itunes.apple.com/en-us
$config = [
    'region' => 'us', 
    'mediaType' => 'ios-apps', 
    'feedType' => 'top-free', //
    'type' => 'games', 
    'limit' => 100, 
    'eighteenR' => true, 
  ];
// $rss = AppStore::RSS()->getAppRankInfo();

 ?>