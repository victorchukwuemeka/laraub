<?php $__env->startSection('content'); ?>
<div class="bg-white shadow-lg rounded-lg overflow-hidden w-full max-w-4xl mx-auto mb-8">
    <div class="px-6 py-4">
      <?php if($user->profile_image): ?>
      <img class="block mx-auto h-24 rounded-full sm:mx-0 sm:shrink-0"
          src="<?php echo e(asset('/storage/'.$user->profile_image)); ?>"alt="Woman's Face" />
      <?php else: ?>
       <img src="<?php echo e(asset('/img/silicon.png')); ?>" alt="User's Profile Picture"
        class="w-8 h-8 rounded-full">
      <?php endif; ?>
        <h1 class="text-3xl font-bold"><?php echo e($user->name); ?></h1>
        <p class="text-gray-600">Email: <?php echo e($user->email); ?></p>
        <a href="<?php echo e(route('user.edit', ['userId' => $user->id])); ?>"
          class="text-blue-500 hover:underline mt-2 inline-block">Edit Profile</a>
    </div>
</div>

<div class="bg-white shadow-lg rounded-lg overflow-hidden w-full max-w-4xl mx-auto mb-8">
    <div class="px-6 py-4">
        <h2 class="text-xl font-semibold">Profile</h2>
        <?php if($profile): ?>
        <p><span class="font-semibold">Job Title:</span> <?php echo e($profile->get_title); ?></p>
        <p><span class="font-semibold">Company:</span> <?php echo e($profile->get_company()); ?></p>
        <p><span class="font-semibold">Company Website:</span> <?php echo e($profile->get_company_website()); ?></p>
        <p><span class="font-semibold">Your Location:</span> <?php echo e($profile->get_location()); ?></p>
        <p><span class="font-semibold">Education:</span> <?php echo e($profile->get_education()); ?></p>
        <p><span class="font-semibold">Availability:</span> <?php echo e($profile->get_availability()); ?></p>
        <p><span class="font-semibold">Social Media:</span> <?php echo e($profile->get_contact_preferences()); ?></p>
        <?php endif; ?>
    </div>
</div>

<div class="bg-white shadow-lg rounded-lg overflow-hidden w-full max-w-4xl mx-auto mb-8">
    <div class="px-6 py-4">
        <?php if($project && $project->get_project_name()): ?>
        <h2 class="text-xl font-semibold"><?php echo e($user->name); ?>: Projects</h2>
        <p><span class="font-semibold">Project Name:</span> <?php echo e($project->get_project_name()); ?></p>
        <p><span class="font-semibold">Description:</span> <?php echo e($project->get_description()); ?></p>
        <p><span class="font-semibold">Link:</span> <?php echo e($project->get_link()); ?></p>
        <p><span class="font-semibold">Technologies Used:</span> <?php echo e($project->get_technologies_used()); ?></p>
        <?php else: ?>
        <a href="<?php echo e(route('projects')); ?>" class="text-blue-500 hover:underline">Projects</a>
        <?php endif; ?>
    </div>
</div>

<div class="bg-white shadow-lg rounded-lg overflow-hidden w-full max-w-4xl mx-auto mb-8">
    <div class="px-6 py-4">
        <h2 class="text-xl font-semibold"><?php echo e($user->name); ?>: Work Experiences</h2>
        <?php $__currentLoopData = $workExperiences; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $experience): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="mb-4">
            <p><span class="font-semibold">Company:</span> <?php echo e($experience->get_company()); ?></p>
            <p><span class="font-semibold">Position:</span> <?php echo e($experience->get_position()); ?></p>
            <p><span class="font-semibold">Start Date:</span> <?php echo e($experience->get_start_date()); ?></p>
            <p><span class="font-semibold">End Date:</span> <?php echo e($experience->get_end_date()); ?></p>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <a href="<?php echo e(route('experiences')); ?>" class="text-blue-500 hover:underline">View More Experiences</a>
    </div>
</div>

<div class="bg-white shadow-lg rounded-lg overflow-hidden w-full max-w-4xl mx-auto mb-8">
    <div class="px-6 py-4">
        <h2 class="text-xl font-semibold"><?php echo e($user->name); ?>: Skills</h2>
        <?php if($skills): ?>
        <p><span class="font-semibold">Laravel Skills:</span> <?php echo e($skills->get_laravel_skills()); ?></p>
        <p><span class="font-semibold">Other Skills:</span> <?php echo e($skills->get_other_skills()); ?></p>
        <?php endif; ?>
        <a href="<?php echo e(route('skills')); ?>" class="text-blue-500 hover:underline">View Skills</a>
    </div>
</div>

<div class="bg-white shadow-lg rounded-lg overflow-hidden w-full max-w-4xl mx-auto mb-8">
    <div class="px-6 py-4">
        <h2 class="text-xl font-semibold"><?php echo e($user->name); ?>: Certificates</h2>
        <a href="<?php echo e(route('certificates')); ?>" class="text-blue-500 hover:underline">View Certificates</a>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/abara/web/laraub/resources/views/profile/show-profile.blade.php ENDPATH**/ ?>