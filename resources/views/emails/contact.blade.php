<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PT Dutacitra Nusa Jaya</title>
</head>
<body>
    <h1>Contact Form Message</h1>
    <p>From <a href="">PT Dutacitra Nusa Jaya Website</a></p>
    <br>
    <div>
        <h2>First Name:</h2>
        <p>{{$firstName}}</p>
    </div>
    <hr>
    <div>
        <h2>Last Name:</h2>
        <p>{{$lastName}}</p>
    </div>
    <hr>
    <div>
        <h2>Email:</h2>
        <a href="mailto:{{ $email }}">{{ $email }}</a>
    </div>
    <hr>
    <div>
        <h2>Phone:</h2>
        <p>{{$phone}}</p>
    </div>
    <hr>
    <div>
        <h2>Subject:</h2>
        <p>{{$subject}}</p>
    </div>
    <hr>
    <div>
        <h2>Message:</h2>
        <p>{{$contactMessage}}</p>
    </div>

</body>
</html>
