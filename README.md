# I'm a teapot

Yii2 missing "I'm a teapot" HTTP exception.

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

```bash
$ composer require deathburger/yii2-teapot-http-exception
```

# Usage
```php
<?php
use deathburger\teapot\TeapotHttpException;

if($developer->noIdeaWhichHttpStatusINeed()) {
    throw new TeapotHttpException("I'm a teapot");
}
```