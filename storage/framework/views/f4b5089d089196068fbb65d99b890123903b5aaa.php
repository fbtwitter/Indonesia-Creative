<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Profile</title>
  </head>
  <body>

    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php echo e(Form::open()); ?>

      <table>
        <tr>
          <td>Id</td>
          <td>:</td>
          <td><?php echo e(@Form::text('id',$d->id_info_user, ['readonly'])); ?></td>
        </tr>
        <tr>
          <td>Nama Depan</td>
          <td>:</td>
          <td><?php echo e(Form::text('namad',$d->nama_depan)); ?></td>
        </tr>
        <tr>
          <td>Nama Belakang</td>
          <td>:</td>
          <td><?php echo e(Form::text('namab',$d->nama_belakang)); ?></td>
        </tr>
        <tr>
          <td>Jenis Kelamin</td>
          <td>:</td>
          <td><?php echo e(Form::text('jk',$d->jenis_kelamin)); ?></td>
        </tr>
        <tr>
          <td>Domisili</td>
          <td>:</td>
          <td><?php echo e(Form::text('domisili',$d->domisili)); ?></td>
        </tr>
        <tr>
          <td><?php echo e(Form::submit()); ?></td>
        </tr>
      </table>
      <br>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php echo e(Form::close()); ?>

  </body>
</html>
