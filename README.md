# qase-api-v2-client

Qase TestOps API v2 Specification.

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: 2.0.0
- Package version: 1.0.0
- Generator version: 7.4.0
  For more information, please visit [https://qase.io](https://qase.io)

## Requirements.

PHP 8.0+

## Installation & Usage

Use this command to install the package:

```sh
$ composer require qase/qase-api-v2-client
```

## Getting Started

```injectablephp
use GuzzleHttp\Client;
use Qase\APIClientV2\Api\ResultsApi;
use Qase\APIClientV2\Configuration;
use Qase\APIClientV2\Model\ResultCreate;

$config = Configuration::getDefaultConfiguration()
    ->setHost(getenv('QASE_API_BASE_URL'))
    ->setApiKey('Token', getenv('QASE_API_TOKEN'));

$resultsApi = new ResultsApi($client, $config);

$resultsApi->createResultV2(getenv('QASE_PROJECT_CODE'), 1, new ResultCreate());
```

## Documentation for API Endpoints

All URIs are relative to *https://api.qase.io/v2*

 Class        | Method                                                    | HTTP request                                  | Description                 
--------------|-----------------------------------------------------------|-----------------------------------------------|-----------------------------
 *ResultsApi* | [**createResultV2**](docs/ResultsApi.md#createResultV2)   | **POST** /{project_code}/run/{run_id}/result  | Create test run result      
 *ResultsApi* | [**createResultsV2**](docs/ResultsApi.md#createResultsV2) | **POST** /{project_code}/run/{run_id}/results | Bulk create test run result 

## Documentation For Models

- [BaseErrorFieldResponse](docs/BaseErrorFieldResponse.md)
- [BaseErrorFieldResponseErrorFieldsInner](docs/BaseErrorFieldResponseErrorFieldsInner.md)
- [BaseErrorResponse](docs/BaseErrorResponse.md)
- [CreateResultV2422Response](docs/CreateResultV2422Response.md)
- [CreateResultsRequestV2](docs/CreateResultsRequestV2.md)
- [RelationSuite](docs/RelationSuite.md)
- [RelationSuiteItem](docs/RelationSuiteItem.md)
- [ResultCreate](docs/ResultCreate.md)
- [ResultCreateFields](docs/ResultCreateFields.md)
- [ResultExecution](docs/ResultExecution.md)
- [ResultRelations](docs/ResultRelations.md)
- [ResultStep](docs/ResultStep.md)
- [ResultStepData](docs/ResultStepData.md)
- [ResultStepExecution](docs/ResultStepExecution.md)
- [ResultStepStatus](docs/ResultStepStatus.md)
- [ResultStepsType](docs/ResultStepsType.md)

<a id="documentation-for-authorization"></a>

## Documentation For Authorization

Authentication schemes defined for the API:
<a id="TokenAuth"></a>

### TokenAuth

- **Type**: API key
- **API key parameter name**: Token
- **Location**: HTTP header

## Author

support@qase.io


