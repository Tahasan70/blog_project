

<?php $__env->startSection('content'); ?>
      <!-- Categories -->
<section id="categories">
  <div class="flex justify-between">
    <h2 class="text-2xl font-semibold mb-4">Categories</h2>
  <a class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700" href="<?php echo e(route('categories.create')); ?>">Create Category</a>
  </div>

  <?php $__sessionArgs = ['success'];
if (session()->has($__sessionArgs[0])) :
if (isset($value)) { $__sessionPrevious[] = $value; }
$value = session()->get($__sessionArgs[0]); ?>
      <p class="text-white px-4 py-2 rounded bg-green-500"><?php echo e($value); ?></p>
  <?php unset($value);
if (isset($__sessionPrevious) && !empty($__sessionPrevious)) { $value = array_pop($__sessionPrevious); }
if (isset($__sessionPrevious) && empty($__sessionPrevious)) { unset($__sessionPrevious); }
endif;
unset($__sessionArgs); ?>

  <!-- Category Listing Table -->
  <div class="bg-white p-6 rounded shadow">
    <h3 class="text-xl font-semibold mb-4">Category List</h3>
    <table class="min-w-full border">
      <thead class="bg-gray-100">
        <tr>
          <th class="px-4 py-2 border">#</th>
          <th class="px-4 py-2 border">Category Name</th>
          <th class="px-4 py-2 border">Actions</th>
        </tr>
      </thead>
      <tbody>
        
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr class="text-gray-700">
            <td class="px-4 py-2 border"><?php echo e($category->id); ?></td>
            <td class="px-4 py-2 border"><?php echo e($category->name); ?></td>
            <td class="px-4 py-2 border space-x-2">
                <a href="<?php echo e(route('categories.edit', $category->id)); ?>" class="text-blue-500 hover:underline">Edit</a>
                <form class="inline-block" action="<?php echo e(route('categories.destroy', $category->id)); ?>" method="POST" onsubmit="return confirm('Are you sure you want to delete this category?')">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit" class="text-red-500 hover:underline">Delete</button>
                </form>

            </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
      </tbody>
    </table>
    <br>
    <?php echo e($categories->links()); ?>

  </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\USER\Desktop\Ostad Classes\PHP_BATCH6\M22_C3\blog-project\resources\views/admin/categories/index.blade.php ENDPATH**/ ?>