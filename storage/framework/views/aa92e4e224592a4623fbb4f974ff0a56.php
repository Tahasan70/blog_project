


<?php $__env->startSection('content'); ?>

<section id="dashboard-stats" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6">
    <!-- Categories Stat Card -->
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h3 class="text-xl font-semibold text-gray-700">Categories</h3>
        <p class="text-4xl font-bold text-blue-600 mt-2"><?php echo e($categoriesCount ?? 0); ?></p>
        <p class="text-sm text-gray-500 mt-2">Total Categories</p>
    </div>

    <!-- Posts Stat Card -->
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h3 class="text-xl font-semibold text-gray-700">Posts</h3>
        <p class="text-4xl font-bold text-blue-600 mt-2"><?php echo e($postsCount ?? 0); ?></p>
        <p class="text-sm text-gray-500 mt-2">Total Posts</p>
    </div>
</section>

  


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\USER\Desktop\Ostad Classes\PHP_BATCH6\M22_C3\blog-project\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>