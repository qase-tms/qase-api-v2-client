# # ResultExecution

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **string** | Can have the following values passed, failed, blocked, skipped, invalid + custom statuses |
**startTime** | **float** | Unix epoch time in seconds (whole part) and milliseconds (fractional part). | [optional]
**endTime** | **float** | Unix epoch time in seconds (whole part) and milliseconds (fractional part). | [optional]
**duration** | **int** | Duration of the test execution in milliseconds. | [optional]
**stacktrace** | **string** |  | [optional]
**errorContext** | **string** | Free-form failure context captured by the reporter. For Playwright this is the content of error-context.md (test info, error details, page snapshot), so it may include rendered page content. Stored verbatim so it can be copied as raw text. Values longer than 262144 characters are silently truncated by Qase and the request still succeeds. Write-only — not returned by the result read endpoints. | [optional]
**thread** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
