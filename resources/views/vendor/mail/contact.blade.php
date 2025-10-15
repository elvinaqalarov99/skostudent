<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml"
      xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Title</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
            font-size: 14px;
            line-height: 20px;
        }
    </style>


</head>
<body
    style="font-family: 'Inter', sans-serif; background-color: #ffffff; font-size: 14px;line-height: 20px;width: 100%;max-width: 600px;margin-right: auto;margin-left: auto;padding: 64px 32px;border:1px solid #E7E9ED">
<table style="width:100%;border-collapse: collapse;">
    <thead>
    <tr>
        <td style="width: 100%; text-align: center; padding-bottom: 32px">
            <h4>{{ config('app.name') }}</h4>
        </td>
    <tr>
    </thead>
</table>
<table style="width: 100%;border-collapse: collapse;">
    <tr style="border:1px solid #E7E9ED;padding: 100px">
        <td style="width:50%;border:1px solid #E7E9ED;padding: 16px;color: #000">
            {{ setting('contact_page_name_label') }}
        </td>
        <td style="padding: 16px;color: #000">
            {{ $validated['name'] }}
        </td>
    </tr>
    <tr style="border:1px solid #E7E9ED;padding: 100px">
        <td style="width:50%;border:1px solid #E7E9ED;padding: 16px;color: #000">
            {{ setting('contact_page_subject_label') }}
        </td>
        <td style="padding: 16px;color: #000">
            {{ $validated['subject']}}
        </td>
    </tr>
    <tr style="border:1px solid #E7E9ED;padding: 100px">
        <td style="width:50%;border:1px solid #E7E9ED;padding: 16px;color: #000">
            {{ setting('contact_page_email_label') }}
        </td>
        <td style="padding: 16px;color: #000">
            {{ $validated['email']}}
        </td>
    </tr>

    <tr style="border:1px solid #E7E9ED;padding: 100px">
        <td style="width:50%;border:1px solid #E7E9ED;padding: 16px;color: #000">
            {{ setting('contact_page_message_label') }}
        </td>
        <td style="padding: 16px;color: #000">
            {{ $validated['message'] }}
        </td>
    </tr>

</table>

</body>
</html>

