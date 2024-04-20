<?php $__env->startSection('content'); ?>
<div class="bg-white shadow-lg rounded-lg overflow-hidden w-full max-w-4xl mx-auto mb-8">
    <div class="flex flex-col md:flex-row items-center justify-between px-6 py-4">
        <div class="flex items-center mb-4 md:mb-0">
            <?php if($profileImage): ?>
            <!--block md:h-24 md:w-24 rounded-full mr-4-->
            <img class="w-16 h-16 rounded-full mr-4 md:mr-8"
                src="<?php echo e(asset('/storage/'.$profileImage)); ?>" alt="User's Profile Picture" />
            <?php else: ?>
            <img src="<?php echo e(asset('/img/silicon.png')); ?>" alt="User's Profile Picture"
                class="w-16 h-16 rounded-full mr-4 md:mr-8">
            <?php endif; ?>
            <div>
                <h1 class="text-lg md:text-3xl font-bold"><?php echo e($user->name); ?></h1>
                <p class="text-gray-600">Email: <?php echo e($user->email); ?></p>
            </div>
        </div>
        <a href="<?php echo e(route('user.edit', ['userId' => $user->id])); ?>"
            class="text-blue-500 hover:underline mt-2 md:mt-0">Edit Profile</a>
    </div>
</div>


<div class="bg-white shadow-lg rounded-lg overflow-hidden w-full max-w-4xl mx-auto mb-8">
  <div class="px-6 py-4 bg-white rounded-lg shadow-md">
    <h2 class="text-xl font-semibold mb-4">Profile</h2>
    <?php if($profile): ?>
    <div class="grid grid-cols-2 gap-4">
        <div>
            <p class="text-gray-600"><span class="font-semibold">Job Title:</span></p>
            <p class="text-gray-800"><?php echo e($profile->get_title); ?></p>
        </div>
        <div>
            <p class="text-gray-600"><span class="font-semibold">Company:</span></p>
            <p class="text-gray-800"><?php echo e($profile->get_company()); ?></p>
        </div>
        <div>
            <p class="text-gray-600"><span class="font-semibold">Company Website:</span></p>
            <p class="text-blue-600 hover:underline"><?php echo e($profile->get_company_website()); ?></p>
        </div>
        <div>
            <p class="text-gray-600"><span class="font-semibold">Your Location:</span></p>
            <p class="text-gray-800"><?php echo e($profile->get_location()); ?></p>
        </div>
        <div>
            <p class="text-gray-600"><span class="font-semibold">Education:</span></p>
            <p class="text-gray-800"><?php echo e($profile->get_education()); ?></p>
        </div>
        <div>
            <p class="text-gray-600"><span class="font-semibold">Availability:</span></p>
            <p class="text-gray-800"><?php echo e($profile->get_availability()); ?></p>
        </div>
        <div>
            <p class="text-gray-600"><span class="font-semibold">Social Media:</span></p>
            <p class="text-blue-600 hover:underline"><?php echo e($profile->get_contact_preferences()); ?></p>
        </div>
    </div>
    <?php endif; ?>
</div>

</div>

<div class="bg-white shadow-lg rounded-lg overflow-hidden w-full max-w-4xl mx-auto mb-8">
    <div class="px-6 py-4">
        <?php if($project && $project->get_project_name()): ?>
        <h2 class="text-2xl font-semibold text-gray-800 mb-4"><?php echo e($user->name); ?>'s Projects</h2>
        <div class="border-t border-gray-200"></div> <!-- Divider line -->
        <div class="mt-4">
            <p class="text-lg font-semibold text-gray-700 mb-2">Project Name:</p>
            <p class="text-gray-800"><?php echo e($project->get_project_name()); ?></p>
        </div>
        <div class="mt-4">
            <p class="text-lg font-semibold text-gray-700 mb-2">Description:</p>
            <p class="text-gray-800"><?php echo e($project->get_description()); ?></p>
        </div>
        <div class="mt-4">
            <p class="text-lg font-semibold text-gray-700 mb-2">Link:</p>
            <a href="<?php echo e($project->get_link()); ?>" class="text-blue-500 hover:underline"><?php echo e($project->get_link()); ?></a>
        </div>
        <div class="mt-4">
            <p class="text-lg font-semibold text-gray-700 mb-2">Technologies Used:</p>
            <p class="text-gray-800"><?php echo e($project->get_technologies_used()); ?></p>
        </div>
        <?php else: ?>
        <a href="<?php echo e(route('projects')); ?>" class="text-lg font-semibold text-blue-500 hover:underline">
        Add Projects
       </a>
        <?php endif; ?>
    </div>
</div>


<div class="bg-white shadow-lg rounded-lg overflow-hidden w-full max-w-4xl mx-auto mb-8">
    <div class="px-6 py-4">
        <h2 class="text-2xl font-semibold text-gray-800 mb-4">
          <?php echo e($user->name); ?>'s Work Experiences
        </h2>
        <div class="border-t border-gray-200"></div> <!-- Divider line -->
        <?php $__currentLoopData = $workExperiences; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $experience): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="mt-4">
            <p class="text-lg font-semibold text-gray-700">
              <?php echo e($experience->get_company()); ?>

            </p>
            <p class="text-gray-800">
              <?php echo e($experience->get_position()); ?>

            </p>
            <div class="flex flex-wrap mt-2">
                <div class="w-full sm:w-1/2">
                    <p class="text-gray-600 font-semibold">
                      Start Date:
                    </p>
                    <p>
                      <?php echo e($experience->get_start_date()); ?>

                    </p>
                </div>
                <div class="w-full sm:w-1/2">
                    <p class="text-gray-600 font-semibold">
                      End Date:
                    </p>
                    <p>
                      <?php echo e($experience->get_end_date()); ?>

                    </p>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <div class="mt-4">
            <a href="<?php echo e(route('experiences')); ?>" class="text-lg font-semibold text-blue-500 hover:underline">
              Add  Experiences
            </a>
        </div>
    </div>
</div>

<div class="bg-white shadow-lg rounded-lg overflow-hidden w-full max-w-4xl mx-auto mb-8">
    <div class="px-6 py-4">
        <h2 class="text-2xl font-semibold text-gray-800 mb-4">
          <?php echo e($user->name); ?>'s Certificates
        </h2>
        <div class="border-t border-gray-200 mb-4"></div> <!-- Divider line -->
        <div class="flex items-center justify-between">
            <p class="text-lg font-semibold text-gray-700">
              No certificates available
            </p>
            <a href="<?php echo e(route('certificates')); ?>" class="text-lg font-semibold text-blue-500 hover:underline">
              Add  Certificates
            </a>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/abara/web/laraub/resources/views/profile/show-profile.blade.php ENDPATH**/ ?>