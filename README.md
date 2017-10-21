# Yii2 missing "I'm a teapot" HTTP exception

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```bash
$ composer require deathburger/yii2-teapot-http-exception
```

# Usage
```php
if($developer->noIdeaWhichHttpStatusINeed()) {
    throw new TeapotHttpException("I'm a teapot");
}
```