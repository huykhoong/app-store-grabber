<h1 align="center"> AppStore-Scrape </h1>

[![Latest Stable Version](https://poser.pugx.org/huykhoong/app-store-scrape/v/stable)](https://packagist.org/packages/huykhoong/app-store-scrape) 
[![Total Downloads](https://poser.pugx.org/huykhoong/app-store-scrape/downloads)](https://packagist.org/packages/huykhoong/app-store-scrape)
[![Latest Unstable Version](https://poser.pugx.org/huykhoong/app-store-scrape/v/unstable)](https://packagist.org/packages/huykhoong/app-store-scrape)
[![License](https://poser.pugx.org/huykhoong/app-store-scrape/license)](https://packagist.org/packages/huykhoong/app-store-scrape)
[![Monthly Downloads](https://poser.pugx.org/huykhoong/app-store-scrape/d/monthly)](https://packagist.org/packages/huykhoong/app-store-scrape)
[![Daily Downloads](https://poser.pugx.org/huykhoong/app-store-scrape/d/daily)](https://packagist.org/packages/huykhoong/app-store-scrape)


```shell
$ composer require huykhoong/app-store-scrape -vvv
```


```php
use huykhoong\AppStoreScrape\AppStore;

$entity = 'software'; // Software App
$country = 'us'; // Support language: https://rss.itunes.apple.com/en-us/language
$appId = '292374531'; // App ID from URL

// Scrape APp info from ID
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


