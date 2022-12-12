# # EmailReport

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**campaign_hash** | **string** |  | [optional] [readonly]
**overall** | [**\EgoiClient\EgoiModel\EmailReportOverallOverall**](EmailReportOverallOverall.md) |  | [optional]
**date** | [**\EgoiClient\EgoiModel\EmailReportByDateDateInner[]**](EmailReportByDateDateInner.md) | Email stats grouped by date | [optional]
**weekday** | [**\EgoiClient\EgoiModel\EmailReportByWeekdayWeekdayInner[]**](EmailReportByWeekdayWeekdayInner.md) | Email stats grouped by date | [optional]
**hour** | [**\EgoiClient\EgoiModel\EmailReportByHourHourInner[]**](EmailReportByHourHourInner.md) | Email stats grouped by hour | [optional]
**location** | [**\EgoiClient\EgoiModel\EmailReportByLocationLocationInner[]**](EmailReportByLocationLocationInner.md) | Email stats grouped by Location | [optional]
**domain** | [**\EgoiClient\EgoiModel\EmailReportByDomainDomainInner[]**](EmailReportByDomainDomainInner.md) | Email stats grouped by Domain | [optional]
**url** | [**\EgoiClient\EgoiModel\EmailReportByUrlUrlInner[]**](EmailReportByUrlUrlInner.md) | Email stats grouped by Domain | [optional]
**reader** | [**\EgoiClient\EgoiModel\EmailReportByReaderReaderInner[]**](EmailReportByReaderReaderInner.md) | Email stats grouped by Reader | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
