# Discussion SDK

## Overview

### Available Operations

* [listDiscussionsForRepo](#listdiscussionsforrepo) - List Discussions for a Repository
* [createDiscussion](#creatediscussion) - Create a Discussion
* [getSingleDiscussion](#getsinglediscussion) - Get a Single Discussion
* [updateDiscussion](#updatediscussion) - Update a Discussion
* [deleteDiscussion](#deletediscussion) - Delete a Discussion

## listDiscussionsForRepo

List Discussions for a Repository

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use OpenAPI\OpenAPI;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = OpenAPI\Discussion::builder()->setSecurity($security)->build();



$response = $sdk->listDiscussionsForRepo(
    owner: '<value>',
    repo: '<value>'

);

if ($response->responseBodies !== null) {
    // handle response
}
```

### Parameters

| Parameter                    | Type                         | Required                     | Description                  |
| ---------------------------- | ---------------------------- | ---------------------------- | ---------------------------- |
| `owner`                      | *string*                     | :heavy_check_mark:           | The owner of the repository. |
| `repo`                       | *string*                     | :heavy_check_mark:           | The name of the repository.  |

### Response

**[?Operations\ListDiscussionsForRepoResponse](../../Models/Operations/ListDiscussionsForRepoResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createDiscussion

Create a Discussion

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use OpenAPI\OpenAPI;
use OpenAPI\OpenAPI\Models\Components;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = OpenAPI\Discussion::builder()->setSecurity($security)->build();

$discussion = new Components\Discussion();

$response = $sdk->createDiscussion(
    owner: '<value>',
    repo: '<value>',
    discussion: $discussion

);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                      | Type                                                           | Required                                                       | Description                                                    |
| -------------------------------------------------------------- | -------------------------------------------------------------- | -------------------------------------------------------------- | -------------------------------------------------------------- |
| `owner`                                                        | *string*                                                       | :heavy_check_mark:                                             | The owner of the repository.                                   |
| `repo`                                                         | *string*                                                       | :heavy_check_mark:                                             | The name of the repository.                                    |
| `discussion`                                                   | [Components\Discussion](../../Models/Components/Discussion.md) | :heavy_check_mark:                                             | N/A                                                            |

### Response

**[?Operations\CreateDiscussionResponse](../../Models/Operations/CreateDiscussionResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getSingleDiscussion

Get a Single Discussion

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use OpenAPI\OpenAPI;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = OpenAPI\Discussion::builder()->setSecurity($security)->build();



$response = $sdk->getSingleDiscussion(
    owner: '<value>',
    repo: '<value>',
    discussionNumber: 26096

);

if ($response->object !== null) {
    // handle response
}
```

### Parameters

| Parameter                    | Type                         | Required                     | Description                  |
| ---------------------------- | ---------------------------- | ---------------------------- | ---------------------------- |
| `owner`                      | *string*                     | :heavy_check_mark:           | The owner of the repository. |
| `repo`                       | *string*                     | :heavy_check_mark:           | The name of the repository.  |
| `discussionNumber`           | *int*                        | :heavy_check_mark:           | The discussion number.       |

### Response

**[?Operations\GetSingleDiscussionResponse](../../Models/Operations/GetSingleDiscussionResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateDiscussion

Update a Discussion

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use OpenAPI\OpenAPI;
use OpenAPI\OpenAPI\Models\Components;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = OpenAPI\Discussion::builder()->setSecurity($security)->build();

$discussion = new Components\Discussion();

$response = $sdk->updateDiscussion(
    owner: '<value>',
    repo: '<value>',
    discussionNumber: 523056,
    discussion: $discussion

);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                      | Type                                                           | Required                                                       | Description                                                    |
| -------------------------------------------------------------- | -------------------------------------------------------------- | -------------------------------------------------------------- | -------------------------------------------------------------- |
| `owner`                                                        | *string*                                                       | :heavy_check_mark:                                             | The owner of the repository.                                   |
| `repo`                                                         | *string*                                                       | :heavy_check_mark:                                             | The name of the repository.                                    |
| `discussionNumber`                                             | *int*                                                          | :heavy_check_mark:                                             | The discussion number.                                         |
| `discussion`                                                   | [Components\Discussion](../../Models/Components/Discussion.md) | :heavy_check_mark:                                             | N/A                                                            |

### Response

**[?Operations\UpdateDiscussionResponse](../../Models/Operations/UpdateDiscussionResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## deleteDiscussion

Delete a Discussion

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use OpenAPI\OpenAPI;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = OpenAPI\Discussion::builder()->setSecurity($security)->build();



$response = $sdk->deleteDiscussion(
    owner: '<value>',
    repo: '<value>',
    discussionNumber: 788856

);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                    | Type                         | Required                     | Description                  |
| ---------------------------- | ---------------------------- | ---------------------------- | ---------------------------- |
| `owner`                      | *string*                     | :heavy_check_mark:           | The owner of the repository. |
| `repo`                       | *string*                     | :heavy_check_mark:           | The name of the repository.  |
| `discussionNumber`           | *int*                        | :heavy_check_mark:           | The discussion number.       |

### Response

**[?Operations\DeleteDiscussionResponse](../../Models/Operations/DeleteDiscussionResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |