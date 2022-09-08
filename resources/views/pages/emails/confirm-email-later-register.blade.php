<!DOCTYPE html>
<html>
    <head>
        <title>boarding-house.com</title>
    </head>
    <body>
        <h1>{{ $details['title'] }}</h1>
        <p>{{ $details['body'] }}</p>

        <a href="{{ route('confirmed-email', $details['email']) }}" target="blank">Click for Confirmed</a>

        <p>Thank you</p>
    </body>
</html>
