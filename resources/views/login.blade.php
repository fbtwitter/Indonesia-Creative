<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>
    {{Form::open()}}
    <br>
    <table>
    <tr>
      <td>{{Form::label('email','Email: ')}}</td>
      <td>{{Form::email('email')}}</td>
    </tr>
    <tr>
      <td>{{Form::label('password','Password : ')}}</td>
      <td>{{Form::password('password')}}</td>
    </tr>
    </table>

    <br>

    <br>
    {{Form::submit()}}
    <br>
    {{Form::close()}}
  </body>
</html>
