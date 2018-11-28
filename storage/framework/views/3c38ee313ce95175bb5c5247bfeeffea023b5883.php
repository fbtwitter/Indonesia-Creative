<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>
    <?php echo e(Form::open()); ?>

    <br>
    <table>
    <tr>
      <td><?php echo e(Form::label('email','Email: ')); ?></td>
      <td><?php echo e(Form::email('email')); ?></td>
    </tr>
    <tr>
      <td><?php echo e(Form::label('password','Password : ')); ?></td>
      <td><?php echo e(Form::password('password')); ?></td>
    </tr>
    </table>

    <br>

    <br>
    <?php echo e(Form::submit()); ?>

    <br>
    <?php echo e(Form::close()); ?>

  </body>
</html>
