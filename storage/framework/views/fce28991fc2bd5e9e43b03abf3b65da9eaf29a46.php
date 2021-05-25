<!DOCTPE html>
<html>
<head>
<title>View Users Records</title>
</head>
<body>
<table border = "1">
<tr>
<td>Id</td>
<td>Name</td>
<td>email</td>
<td>Organisation</td>
<td>Compagne</td>
</tr>
<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
<td><?php echo e($user->id); ?></td>
<td><?php echo e($user->name); ?></td>
<td><?php echo e($user->email); ?></td>
<td><?php echo e($user->idOrganisation); ?></td>
<td><?php echo e($user->idCompagne); ?></td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
</body>
</html><?php /**PATH C:\Users\yahya\Desktop\myapp\resources\views/stud_view.blade.php ENDPATH**/ ?>