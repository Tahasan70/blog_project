<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Laravel Auth</title>
</head>
<body class="bg-gray-100">
    <nav class="p-6 bg-white flex justify-between">
        <ul class="flex items-center">
            <li>
                <a href="" class="p-3">Home</a>
            </li>
            <li>
                <a href="" class="p-3">Dashboard</a>
            </li>
        </ul>

        <ul class="flex items-center">
            <?php if(auth()->guard()->check()): ?>
                <li>
                    <a href="#" class="p-3"><?php echo e(auth()->user()->name); ?></a>
                </li>
                <li>
                    <form action="<?php echo e(route('logout')); ?>" method="post" class="p-3 inline">
                        <?php echo csrf_field(); ?>
                        <button type="submit">Logout</button>
                    </form>
                </li>
            <?php endif; ?>
            
            <?php if(auth()->guard()->guest()): ?>
                <li>
                    <a href="<?php echo e(route('login')); ?>" class="p-3">Login</a>
                </li>
                <li>
                    <a href="<?php echo e(route('register')); ?>" class="p-3">Register</a>
                </li>
            <?php endif; ?>
        </ul>
    </nav>

    <div class="container mx-auto mt-6 px-6">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
</body>
</html><?php /**PATH C:\Users\USER\Desktop\Ostad Classes\PHP_BATCH6\M22_C3\blog-project\resources\views/layouts/app.blade.php ENDPATH**/ ?>