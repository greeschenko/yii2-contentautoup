# yii2-contentautoup
easy ajax auto update for content blocks with different time intervals

Installation
------------

add to composer.json

```
"repositories": [
    ...
    {
        "type": "git",
        "url": "ssh://git@github.com:22/greeschenko/yii2-contentautoup.git"
    }
    ...
],

"require": {
    ...
    "greeschenko/yii2-contentautoup": "*"
    ...
},
```

Usage
-----

```
...
use greeschenko\contentautoup\AutoUpContent;
...
<?=AutoUpContent::widget([
    'url' => '/controller/action', //your data update action
    'interval' => '3000', //time interval in milisecond
])?>
```
