


<?php $__env->startSection('content'); ?>
      <!-- Posts -->
<section id="posts">
  <div class="flex justify-between">
    <h2 class="text-2xl font-semibold mb-4">Posts</h2>
  <a class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700" href="<?php echo e(route('posts.create')); ?>">Create Post</a>
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
  <!-- Post Listing Table -->
  <div class="bg-white p-6 rounded shadow">
    <h3 class="text-xl font-semibold mb-4">Post List</h3>
    <table class="min-w-full border">
      <thead class="bg-gray-100">
        <tr>
          <th class="px-4 py-2 border">#</th>
          <th class="px-4 py-2 border">Image</th>
          <th class="px-4 py-2 border">Title</th>
          <th class="px-4 py-2 border">Author</th>
          <th class="px-4 py-2 border">Published</th>
          <th class="px-4 py-2 border">Created At</th>
          <th class="px-4 py-2 border">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr class="text-gray-700">
          <td class="px-4 py-2 border"><?php echo e($loop->iteration); ?></td>
          <td class="px-4 py-2 border">
            <img class="w-28 h-18" src="<?php echo e(asset("/" . $post->featured_image)); ?>" alt="">
          </td>
          <td class="px-4 py-2 border"><?php echo e($post->title); ?></td>
          <td class="px-4 py-2 border"><?php echo e($post->user->name); ?></td>
          <td class="px-4 py-2 border"><?php echo e($post->created_at->diffForHumans()); ?></td>
          <td class="px-4 py-2 border"><?php echo e($post->created_at->format('d-m-y h:i')); ?></td>
          <td class="px-4 py-2 border space-x-2">
            <a href="<?php echo e(route('posts.edit', $post->id)); ?>" class="text-blue-500 hover:underline">Edit</a>
                <form class="inline-block" action="<?php echo e(route('posts.destroy', $post->id)); ?>" method="POST" onsubmit="return confirm('Are you sure you want to delete this post?')">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit" class="text-red-500 hover:underline">Delete</button>
                </form>
          </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
      </tbody>
    </table>
  </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\USER\Desktop\Ostad Classes\PHP_BATCH6\M22_C3\blog-project\resources\views/admin/posts/index.blade.php ENDPATH**/ ?>