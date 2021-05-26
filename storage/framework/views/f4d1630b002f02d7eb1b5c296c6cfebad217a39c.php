<!DOCTYPE html>
<html>
<head>
    <title>Welcome Email</title>
</head>

<body>
<h2>Welcome to the site <?php echo e($user['name']); ?></h2>
<br/>
Your registered email-id is <?php echo e($user['email']); ?>

Your registered password-id is <?php echo e($user['password']); ?>


</body>

</html><?php /**PATH C:\Users\yahya\Desktop\myapp\resources\views/emails/welcome.blade.php ENDPATH**/ ?>