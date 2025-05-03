


<?php $__env->startSection('content'); ?>
          <!-- Posts -->
<section id="posts">
  <h2 class="text-2xl font-semibold mb-4">Posts</h2>

  <!-- Post Form -->
  <div class="bg-white p-6 rounded shadow mb-6">
    <h3 class="text-xl font-semibold mb-4"> Edit Post</h3>
      <form action="<?php echo e(route('posts.update', $post->id)); ?>" method="POST" class="space-y-4" enctype="multipart/form-data">
      <?php echo csrf_field(); ?>
      <?php echo method_field('PUT'); ?> <!-- Use PUT method for updating -->

      <input type="hidden" name="user_id" value="1">
      <div>
        <label class="block text-gray-700">Title</label>
        <input type="text" name="title" class="w-full p-2 border border-gray-300 rounded" placeholder="Post Title" value="<?php echo e(old('title', $post->title)); ?>">
      </div>

      <div>
        <label class="block text-gray-700">Content</label>
        <textarea name="content" class="w-full p-2 border border-gray-300 rounded" placeholder="Post Content" rows="5"><?php echo e(old('content', $post->content)); ?></textarea>
      </div>

      <div>
        <label class="block text-gray-700">Category</label>
        <select name="category_id" class="w-full p-2 border border-gray-300 rounded">
          <option value="">Select Category</option>
          <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($category->id); ?>" <?php echo e(old('category_id', $post->category_id) == $category->id ? 'selected' : ''); ?>>
              <?php echo e($category->name); ?>

            </option>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
      </div>

      <div>
        <br/>
        
        <img class="w-36 h-36" id="newImg" src="<?php echo e(asset("/" . $post->featured_image)); ?>" alt="Featured Image"/>

        <br/>
        <label class="block text-gray-700">Featured Image</label>
        <input oninput="newImg.src=window.URL.createObjectURL(this.files[0])" type="file" name="featured_image" class="w-full p-2 border border-gray-300 rounded" accept="image/*">
      </div>

      <div>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Update Post</button>
      </div>
  </form>

  </div>


</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\USER\Desktop\Ostad Classes\PHP_BATCH6\M22_C3\blog-project\resources\views/admin/posts/edit.blade.php ENDPATH**/ ?>