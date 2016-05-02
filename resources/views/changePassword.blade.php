<!-- app/views/login.blade.php --><

<!doctype html>
<html>
<head>
<title>Change the password for a user</title>
</head>
<body><

{{ Form::open(array('url' => 'changePassword')) }}

<h1>Login</h1>

<!-- if there are login errors, show them here -->
<p>
    {{ $errors->first('email') }}
    {{ $errors->first('password') }}
</p>

<p>
    {{ Form::label('email', 'Email Address') }}
    {{ Form::text('email', '', array('placeholder' => 'a')) }}
</p>

<p>
    {{ Form::label('password', 'Password') }}
    {{ Form::password('password') }}
</p>

<p>{{ Form::submit('Submit!') }}</p>