<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
</head>

<body>
    <h1>Conact us any time</h1>
    <form action="{{route('contact')}}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Your name please">
        <input type="email" name="email" placeholder="Your valid email">
        <textarea name="message" cols="30" rows="10" placeholder="Your Query"></textarea>
        <input type="submit" value="Submit" />

    </form>
</body>

</html>