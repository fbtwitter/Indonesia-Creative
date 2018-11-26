<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin</title>
  </head>
  <body>
    <?php echo e(Form::open()); ?>

    <table>
    <tr>
      <td><?php echo e(Form::label('email','Username')); ?></td>
      <td>:</td>
      <td><?php echo e(Form::email('email')); ?></td>
    </tr>
    <tr>
      <td><?php echo e(Form::label('password','Password')); ?></td>
      <td>:</td>
      <td><?php echo e(Form::password('password')); ?></td>
    </tr>
    </table>

    <br>

    <br>
    <?php echo e(Form::submit()); ?>

    <?php echo e(Form::close()); ?>

  </body>
</html>
