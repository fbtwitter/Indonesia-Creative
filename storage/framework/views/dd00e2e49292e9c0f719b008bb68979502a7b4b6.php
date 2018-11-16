<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register</title>
  </head>
  <body>
    <?php echo e(Form::open()); ?>

      <table>
        <tr>
          <td>Email</td>
          <td>:</td>
          <td><?php echo e(Form::email('email')); ?></td>
        </tr>
        <tr>
          <td>Password</td>
          <td>:</td>
          <td><?php echo e(Form::password('pwd1')); ?></td>
        </tr>
        <tr>
          <td>Retype Password</td>
          <td>:</td>
          <td><?php echo e(Form::password('pwd2')); ?></td>
        </tr>
        <tr>
          <td><?php echo e(Form::submit()); ?></td>
        </tr>
      </table>
    <?php echo e(Form::close()); ?>

  </body>
</html>
