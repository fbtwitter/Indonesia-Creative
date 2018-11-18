<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Profile</title>
  </head>
  <body>

    @foreach ($data as $d)
    {{Form::open()}}
      <table>
        <tr>
          <td>Id</td>
          <td>:</td>
          <td>{{@Form::text('id',$d->id_info_user, ['readonly'])}}</td>
        </tr>
        <tr>
          <td>Nama Depan</td>
          <td>:</td>
          <td>{{Form::text('namad',$d->nama_depan)}}</td>
        </tr>
        <tr>
          <td>Nama Belakang</td>
          <td>:</td>
          <td>{{Form::text('namab',$d->nama_belakang)}}</td>
        </tr>
        <tr>
          <td>Jenis Kelamin</td>
          <td>:</td>
          <td>{{Form::text('jk',$d->jenis_kelamin)}}</td>
        </tr>
        <tr>
          <td>Domisili</td>
          <td>:</td>
          <td>{{Form::text('domisili',$d->domisili)}}</td>
        </tr>
        <tr>
          <td>{{Form::submit()}}</td>
        </tr>
      </table>
      <br>
    @endforeach
    {{Form::close()}}
  </body>
</html>
