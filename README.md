# ONEXCRM Create Response Structure

## Create response structure for API call or Service call - easily.

## Installation

```shell
composer require onexcrm/response-structure
```

### Laravel without auto-discovery:

If you don't use auto-discovery, add the ServiceProvider to the providers array in config/app.php

```php
Onex\Responsestructure\OnexResponseStructureServiceProvider::class,
```

If you want to use the facade to log messages, add this to your facades in app.php:

```php
'OnexResponse'=> Onex\Responsestructure\Responsestructure\ResponseStructureClassFacade::class,
```

### How to use?:

```php
/**
 * 1st @param  array $dataBag
 * 2nd @param  string $responseMessage (default = '')
 * 3rd @param  string $bodyMessageTitle (default = '')
 * 4th @param  string $bodyMessage (default = '')
 * 5th @param  string $messageType (default = 'success')
 * 6th @param  string $responseStatus (default = '200')
 * 7th @param  string $responseType (default = 'success')
 * 8th @param  string $httpCode (default = '200')
*/
```
> Example #1 (Array Format)
---

```php
$getResponse = OnexResponse::constructResponse($userData, 'User list found');
dd($getResponse);
```

> Example #2 (Json Format)
---

```php
$getResponse = OnexResponse::constructResponseJson($userData, 'User list found');
dd($getResponse);
```

> Example #3 (Json Object Response Format)
---

```php
$getResponse = OnexResponse::constructResponseJsonObject($userData, 'User list found');
dd($getResponse);
```

![onex_resstruc](https://user-images.githubusercontent.com/24665327/220434253-7ef23c52-3715-4454-ad6a-b66d4ed3f317.png)

Feel free to contact me: Arindam Roy <arindam.roy.developer@gmail.com>
### Thanks
