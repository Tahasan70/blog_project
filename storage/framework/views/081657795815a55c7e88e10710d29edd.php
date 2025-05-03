


<?php $__env->startSection('content'); ?>
          <!-- Category -->
<section id="posts">
  <h2 class="text-2xl font-semibold mb-4">Category</h2>

<!-- Category Create Form -->
<div class="bg-white p-6 rounded shadow mb-6">
  <h3 class="text-xl font-semibold mb-4">Create Category</h3>
  <form class="space-y-4" action="<?php echo e(route('categories.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <div>
      <label class="block text-gray-700">Category Name</label>
      <input name="name" type="text" class="w-full p-2 border border-gray-300 rounded" placeholder="Category Name">
      <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
    <div>
      <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Save Category</button>
    </div>
  </form>
</div>



</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\USER\Desktop\Ostad Classes\PHP_BATCH6\M22_C3\blog-project\resources\views/admin/categories/create.blade.php ENDPATH**/ ?>