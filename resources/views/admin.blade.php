<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin</title>
  </head>
  <body>
    {{Form::open()}}
    <table>
    <tr>
      <td>{{Form::label('email','Username')}}</td>
      <td>:</td>
      <td>{{Form::email('email')}}</td>
    </tr>
    <tr>
      <td>{{Form::label('password','Password')}}</td>
      <td>:</td>
      <td>{{Form::password('password')}}</td>
    </tr>
    </table>

    <br>

    <br>
    {{Form::submit()}}
    {{Form::close()}}
  </body>
</html>
