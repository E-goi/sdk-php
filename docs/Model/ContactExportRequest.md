# # ContactExportRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**format** | **string** | File extension to export contacts |
**callback_url** | **string** | Url to receive the callback &lt;a href&#x3D;&#39;/usecases/callbacks/#exports-a-list-of-contacts&#39; target&#x3D;&#39;_blank&#39;&gt;[Go to callback documentation]&lt;/a&gt; | [optional]
**segments** | **string[]** | Array of segment IDs to filter contacts to export. ***Note:*** segments of type ***auto*** and  ***tag*** are not yet supported but they are expected to be supported soon! | [optional]
**fields** | **string[]** | Array of field IDs to be displayed in the exported file | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
