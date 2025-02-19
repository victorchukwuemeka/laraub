<!-- resources/views/admin/dashboard.blade.php -->



<?php $__env->startSection('content'); ?>
    <div class="bg-white p-8 rounded shadow">
        <h2 class="text-2xl font-bold mb-4">Admin Dashboard</h2>

        <!-- Example Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            <!-- Card 1 -->
            <div class="bg-blue-500 text-white p-4 rounded">
                <h3 class="text-xl font-semibold mb-2">Total Users</h3>
                <p class="text-3xl font-bold">150</p>
            </div>

            <!-- Card 2 -->
            <div class="bg-green-500 text-white p-4 rounded">
                <h3 class="text-xl font-semibold mb-2">Total Posts</h3>
                <p class="text-3xl font-bold">300</p>
            </div>

            <!-- Card 3 -->
            <div class="bg-yellow-500 text-white p-4 rounded">
                <h3 class="text-xl font-semibold mb-2">Revenue</h3>
                <p class="text-3xl font-bold">$10,000</p>
            </div>
        </div>
        <!-- Buttons for Create and Edit -->
       <div class="mt-8 flex justify-between mb-4">
           <a href="<?php echo e(route('admin.create.article')); ?>" class="bg-blue-500 text-white px-4 py-2 rounded">
             Create Article
           </a>
           <a href="<?php echo e(url('/admin/articles/edit/1')); ?>" class="bg-green-500 text-white px-4 py-2 rounded">
             Edit Article 1
           </a>
       </div>

        <!-- Example Table -->
        <div class="mt-8">
            <h3 class="text-xl font-bold mb-4">Recent Posts</h3>
            <table class="min-w-full border border-gray-300">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b">Title</th>
                        <th class="py-2 px-4 border-b">Author</th>
                        <th class="py-2 px-4 border-b">Date</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Example Row 1 -->
                    <?php $__currentLoopData = $viewData['articles']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                          <td class="py-2 px-4 border-b">
                            <a href="<?php echo e(url('/admin/show/article/'.$article->id)); ?>">
                            <?php echo e($article->title); ?>

                            </a>
                          </td>

                        <td class="py-2 px-4 border-b">Admin User</td>
                        <td class="py-2 px-4 border-b">2024-02-02</td>
                    </tr>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <tr>

                        <td class="py-2 px-4 border-b">Introduction to Laravel</td>
                        <td class="py-2 px-4 border-b">Admin User</td>
                        <td class="py-2 px-4 border-b">2024-02-02</td>
                    </tr>

                    <!-- Example Row 2 -->
                    <tr>
                        <td class="py-2 px-4 border-b">Getting Started with Tailwind CSS</td>
                        <td class="py-2 px-4 border-b">Admin User</td>
                        <td class="py-2 px-4 border-b">2024-02-01</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/victor/odinala/laraub/resources/views/admin/article/index.blade.php ENDPATH**/ ?>