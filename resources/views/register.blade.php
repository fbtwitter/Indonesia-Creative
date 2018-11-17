<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register</title>
  </head>
  <body>
    {{Form::open()}}
      <table>
        <tr>
          <td>Nama Depan</td>
          <td>:</td>
          <td>{{Form::text('namad')}}</td>
        </tr>
        <tr>
          <td>Nama Belakang</td>
          <td>:</td>
          <td>{{Form::text('namab')}}</td>
        </tr>
        <tr>
          <td>Email</td>
          <td>:</td>
          <td>{{Form::email('email')}}</td>
        </tr>
        <tr>
          <td>Password</td>
          <td>:</td>
          <td>{{Form::password('pwd1')}}</td>
        </tr>
        <tr>
          <td>Retype Password</td>
          <td>:</td>
          <td>{{Form::password('pwd2')}}</td>
        </tr>
        <tr>
          <td>{{Form::submit()}}</td>
        </tr>
      </table>
    {{Form::close()}}
  </body>
</html>
