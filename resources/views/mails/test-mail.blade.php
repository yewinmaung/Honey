<!DOCTYPE html>
<html lang="en">
<head>
    <title>Email</title>
</head>
<body>
    <header>{{ $mailData['title']}}</header>
    <p class="">
        Dear {{$mailData['name']}} <br>
        Nice to meet you. <br>

    </p>
    <p>
        {{$mailData['body']}}
        <br>
        Thank You &smile;. <br>
        With best Wishes. <br>
        Have a nice day &hearts;.
    </p>

</body>
</html>
