<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

Hello,	 {{ $customer->first_name.' '.$customer->last_name}}<br>
thanks for join our Shop...<br>
Your Email address is: {{ $customer->email_address}}<br>
Your Password is: {{ $customer->password}}<br>
Your Phone number is: {{ $customer->phone_number}}
</body>
</html>
