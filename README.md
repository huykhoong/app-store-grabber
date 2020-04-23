<h1 align="center"> AppStore-grabber </h1>

[![Latest Stable Version](https://poser.pugx.org/huykhoong/app-store-grabber/v/stable)](https://packagist.org/packages/huykhoong/app-store-grabber) 
[![Total Downloads](https://poser.pugx.org/huykhoong/app-store-grabber/downloads)](https://packagist.org/packages/huykhoong/app-store-grabber)
[![Latest Unstable Version](https://poser.pugx.org/huykhoong/app-store-grabber/v/unstable)](https://packagist.org/packages/huykhoong/app-store-grabber)
[![License](https://poser.pugx.org/huykhoong/app-store-grabber/license)](https://packagist.org/packages/huykhoong/app-store-grabber)
[![Monthly Downloads](https://poser.pugx.org/huykhoong/app-store-grabber/d/monthly)](https://packagist.org/packages/huykhoong/app-store-grabber)
[![Daily Downloads](https://poser.pugx.org/huykhoong/app-store-grabber/d/daily)](https://packagist.org/packages/huykhoong/app-store-grabber)

Working website that is using this grabber: https://100best.app/apps/all-category/ios

```shell
$ composer require huykhoong/app-store-grabber -vvv
```


```php
use huykhoong\AppStoregrabber\AppStore;

$entity = 'software'; // Software App
$country = 'us'; // Support language: https://rss.itunes.apple.com/en-us/language
$appId = '292374531'; // App ID from URL

// grabber APp info from ID
$app = AppStore::App()->getApp($appId,$entity,$country);

// Get comment
$page = 1; // Page 
$sort = 'RECENT'; // ['RECENT', 'HELPFUL']
$comments = AppStore::Comments()->getComments($appId,$country,$page,$sort);

// Get Developer info
$devId = 292374531;// Developer ID
$developer = AppStore::Developer()->getDeveloperMetadata($devId,$country);
//Get apps by Dev
$developerApp = AppStore::Developer()->getDevApp($devId,$country);

// Get by rating by ID
$ratings = AppStore::Ratings()->getRatings($appId,$country);

//Search by keyword
$keyword = 'freefire';
$search = AppStore::Search()->getAppByKeyword($keyword);
//Return App Rank 
$search = AppStore::Search()->getAppRankByKeyword($keyword,$appId);

//Get List from RSS https://rss.itunes.apple.com/en-us
$config = [
    'region' => 'us', 
    'mediaType' => 'ios-apps', 
    'feedType' => 'top-free', /
    'type' => 'games', 
    'limit' => 100, 
    'eighteenR' => true, 
  ];
$rss = AppStore::RSS()->getAppRankInfo();


