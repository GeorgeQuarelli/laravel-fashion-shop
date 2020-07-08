<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        @foreach ($clothes as $cloth)
            <p>{{ $cloth->brand }}</p>
        @endforeach
    </body>
</html>
