
# Pornhub API client written in PHP
Pornhub api http client, written in PHP

## Requirements
* PHP 7.4+
* ext-json

## Setup

**Composer:**

```bash
composer require paramako/pornhub-api-client
```

## Quickstart

### Example Using Factory

All following examples assume this step.

```php
$client = Paramako\Pornhub\Factory::create();
```

### Disable Guzzle exceptions
By using method `disableHttpErrorExceptions` , you will not receive any exceptions at all, but pure responses.
```php
$client->disableHttpErrorExceptions();
```

### Get ResponseInterface object instead of Paramako\Http\Response
By using method `disableResponseWrapper` , you will receive raw ResponseInterface object, instead of it`s wrapper.
```php
$client->disableResponseWrapper();
```

### Usage examples
Client has 4 resources: Vides, Stars, Categories and Tags.
Getting a resource from client
```php
$videos = $client->videos();
$stars = $client->stars();
$tags = $client->tags();
$categories = $client->categories();
```

Search for videos
```php
$client->videos()->get();
```
Get video by video_id
```php
$videoId = 'some_id_here';
$client->videos()->getById($videoId);
```
Get stars list
```php
$client->stars()->get();
```

### Access the response data
If response wrapping is enabled (it`s enabled by default), data can be accessed in several ways

As an array
```php
$response = $client->categories()->get();
$categories = $response['categories'];

foreach ($categories as $category) {
    // do some logic here
}
```

Or as an object

```php
$response = $client->categories()->get();
$categories = $response->getData()->categories;
```

Or ResponseInterface object
```php
$response = $client->categories()->get();
$categories = $response->getResponse(); // returns ResponseInterface
```

### Example Without Factory

```php
<?php

require 'vendor/autoload.php';

$client = new \Paramako\Pornhub\Http\Client();

$stars = new \Paramako\Pornhub\Resources\Stars($client);

$response = $stars->get();
```