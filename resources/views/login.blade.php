<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Test</title>
  </head>
    <body>
        <div class="container">
            <form action="/login">
            @csrf
            <div class="row" style="background-color:#888888">
                <div class="col-sm-5"></div>
                <div class="col-sm-1">Username:</div>
                <div class="col-sm-6"><input type="text" name="username"></div>
            </div>
            <div class="row" style="background-color:#888833">
                <div class="col-sm-5"></div>
                <div class="col-sm-1">Password:</div>
                <div class="col-sm-6"><input type="password" name="password"></div>
            </div>
            <div class="row" style="background-color:#888822">
                <div class="col-sm-6"></div>
                <div class="col-sm-2"><input type="submit" name="submit" value="submit"></div>
                <div class="col-sm-4"></div>
            </div>
            <div class="row" style="background-color:#888811">
                <div class="col-sm-5"></div>
                <div class="col-sm-2">{{ $message }}</div>
                <div class="col-sm-5"></div>
            </div>
            </form>
        </div>
    </body>
</html>
