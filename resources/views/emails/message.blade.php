<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>

<body>
    <h3>
        Hello Jobify Family, we wanted you to know that you received a new message from your website.
        Please Find the information provided below!
    </h3>
    <h4>Name: {{ $messageData['Name'] }}</h4>
    <h4>Phone: {{ $messageData['Phone'] }}</h4>
    <h4>Email: {{ $messageData['Email'] }}</h4>
    <h4>Plan: {{ $messageData['Plan'] }}</h4>
    @if ($messageData['Promo'] != null)
        <h4>Promo Code Used: {{ $messageData['Promo'] }}</h4>
    @else
        <h4 class="text-danger">No Promo Code Used</h4>
    @endif
</body>

</html>
