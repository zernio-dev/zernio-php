# # CreateWhatsAppTemplateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | WhatsApp social account ID |
**name** | **string** | Template name (lowercase, letters/numbers/underscores, must start with a letter) |
**category** | **string** | Template category |
**language** | **string** | Template language code (e.g., en_US) |
**components** | [**\Late\Model\WhatsAppTemplateComponent[]**](WhatsAppTemplateComponent.md) | Template components (header, body, footer, buttons). Required for custom templates, omit when using library_template_name. | [optional]
**library_template_name** | **string** | Name of a pre-built template from Meta&#39;s template library (e.g., \&quot;appointment_reminder\&quot;, \&quot;auto_pay_reminder_1\&quot;, \&quot;address_update\&quot;). When provided, the template is pre-approved by Meta with no review wait. Omit &#x60;components&#x60; when using this field. | [optional]
**library_template_body_inputs** | **object** | Optional body customizations for library templates. Available options depend on the template (e.g., add_contact_number, add_learn_more_link, add_security_recommendation, add_track_package_link, code_expiration_minutes). | [optional]
**library_template_button_inputs** | [**\Late\Model\CreateWhatsAppTemplateRequestLibraryTemplateButtonInputsInner[]**](CreateWhatsAppTemplateRequestLibraryTemplateButtonInputsInner.md) | Optional button customizations for library templates. Each item specifies button type and configuration (e.g., URL, phone number, quick reply). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
