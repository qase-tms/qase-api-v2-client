# Qase\APIClientV2\CustomFieldsApi



All URIs are relative to https://api.qase.io/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCustomFieldV2()**](CustomFieldsApi.md#getCustomFieldV2) | **GET** /custom_field/{id} | Get Custom Field |
| [**getCustomFieldsV2()**](CustomFieldsApi.md#getCustomFieldsV2) | **GET** /custom_field | Get all Custom Fields |


## `getCustomFieldV2()`

```php
getCustomFieldV2($id): \Qase\APIClientV2\Model\CustomFieldResponse
```

Get Custom Field

This method allows to retrieve custom field.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TokenAuth
$config = Qase\APIClientV2\Configuration::getDefaultConfiguration()->setApiKey('Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Qase\APIClientV2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Token', 'Bearer');


$apiInstance = new Qase\APIClientV2\Api\CustomFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Identifier.

try {
    $result = $apiInstance->getCustomFieldV2($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsApi->getCustomFieldV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Identifier. | |

### Return type

[**\Qase\APIClientV2\Model\CustomFieldResponse**](../Model/CustomFieldResponse.md)

### Authorization

[TokenAuth](../../README.md#TokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomFieldsV2()`

```php
getCustomFieldsV2($entity, $type, $limit, $offset): \Qase\APIClientV2\Model\CustomFieldListResponse
```

Get all Custom Fields

This method allows to retrieve and filter custom fields.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TokenAuth
$config = Qase\APIClientV2\Configuration::getDefaultConfiguration()->setApiKey('Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Qase\APIClientV2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Token', 'Bearer');


$apiInstance = new Qase\APIClientV2\Api\CustomFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entity = 'entity_example'; // string
$type = 'type_example'; // string
$limit = 10; // int | A number of entities in result set.
$offset = 0; // int | How many entities should be skipped.

try {
    $result = $apiInstance->getCustomFieldsV2($entity, $type, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsApi->getCustomFieldsV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entity** | **string**|  | [optional] |
| **type** | **string**|  | [optional] |
| **limit** | **int**| A number of entities in result set. | [optional] [default to 10] |
| **offset** | **int**| How many entities should be skipped. | [optional] [default to 0] |

### Return type

[**\Qase\APIClientV2\Model\CustomFieldListResponse**](../Model/CustomFieldListResponse.md)

### Authorization

[TokenAuth](../../README.md#TokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
