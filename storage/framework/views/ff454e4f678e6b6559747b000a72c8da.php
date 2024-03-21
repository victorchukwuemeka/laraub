<?php $__env->startSection('content'); ?>
<h1><?php echo e($user->name); ?></h1>
<p>Email: <?php echo e($user->email); ?></p>

<a href="<?php echo e(route('user.edit', ['userId' => $user->id])); ?>"
  class="text-blue-500 hover:underline">Edit Profile</a>
<!-- Display user profile details -->
<h2>Profile</h2>
<?php if($profile): ?>
<p>Job Title: <?php echo e($profile->get_title); ?></p>
<p>Company: <?php echo e($profile->get_company()); ?></p>
<p>Company Website: <?php echo e($profile->get_company_website()); ?></p>
<p>Your Location: <?php echo e($profile->get_location()); ?></p>
<p>Education: <?php echo e($profile->get_education()); ?></p>
<p>Availability: <?php echo e($profile->get_availability()); ?></p>
<p>Socail Media: <?php echo e($profile->get_contact_preferences()); ?></p>



<?php endif; ?>
   <?php if($project && $project->get_project_name()): ?>
   <p> <?php echo e($user->name); ?>: projects </p>
   <?php echo e($project->get_project_name()); ?>

   <?php echo e($project->get_description()); ?>

   <?php echo e($project->get_link()); ?>

   <?php echo e($project->get_technologies_used()); ?>

   <?php else: ?>
   <a href="<?php echo e(route('projects')); ?>">
    <?php echo e(__("projects")); ?>

   </a>
   <?php endif; ?>
   <div class="">
     <?php $__currentLoopData = $workExperiences; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $experience): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <?php echo e($experience->get_company()); ?>

       <?php echo e($experience->get_position()); ?>

       <?php echo e($experience->get_start_date()); ?>

       <?php echo e($experience->get_end_date()); ?>

     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <a href="<?php echo e(route('experiences')); ?>">
     <?php echo e(__("experiences")); ?>

    </a>
   </div>

    <div class="">
      <?php if($skills): ?>
      <?php echo e($skills->get_laravel_skills()); ?>

      <?php echo e($skills->get_other_skills()); ?>

      <?php endif; ?>
      <a href="<?php echo e(route('skills')); ?>">
       <?php echo e(__("skills")); ?>

      </a>
    </div>

     <div class="">
       <a href="<?php echo e(route('certificates')); ?>">
         <?php echo e(__('certificates')); ?>

       </a>
     </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/abara/web/laraub/resources/views/profile/show-profile.blade.php ENDPATH**/ ?>