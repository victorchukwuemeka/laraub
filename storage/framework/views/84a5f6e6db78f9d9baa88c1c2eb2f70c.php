<?php $__env->startSection('content'); ?>
<div class="container mx-auto rounded-lg shadow-lg mt-0 mb-12">

  <div class="flex  flex-auto  flex-col pl-8
   pt-8 pb-8 md:flex-row sm:flex-row">

    <div class="flex-initial  mt-9 ml-16 mr-16 pl-12 pt-2">
      <form class="" action="<?php echo e(route('profile_image')); ?>"
         method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php if(optional($user->profileImage)->get_user_profile_image()): ?>
        <img class="w-16 h-16 rounded-full mr-4 md:mr-8"
        src="<?php echo e(asset('/storage/'.$user->profileImage->get_user_profile_image())); ?>"
        alt="User's Profile Picture" />
        <label for="upload">
           <i class="fa-solid fa-image"></i>
        </label>
        <input type="file" id="upload" name="profile_image"
         accept="image/*" class="hidden">
        <?php else: ?>
          <img src="<?php echo e(asset('/img/silicon.png')); ?>" alt="User's Profile Picture"
             class="w-16 h-16 rounded-full mr-4 md:mr-8">
             <label for="upload">
                <i class="fa-solid fa-image"></i>
             </label>
             <input type="file" id="upload" name="profile_image"
              accept="image/*" class="hidden">
        <?php endif; ?>
        <div class="mt-4">
               <button type="submit" class="bg-blue-500 text-white rounded-full py-2 px-6">Upload Image</button>
        </div>
      </form>

    </div>

    <div class="flex flex-wrap flex-auto  mr-0 ml-0 xl:mr-12 xl:mt-16 xl:pt-4">

      <form class="h-full sm:w-full md:w-2/3 w-full" action="<?php echo e(route('user.update', ['userId' => $user->id])); ?>"
        method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="space-y-6">
          <div class="grid grid-cols-1 md:grid-cols-2 gap-x-4 gap-y-6">
            <div>
              <label for="name" class="text-sm text-gray-600 font-semibold">Name</label>
              <input type="text" id="name" name="name" value="<?php echo e(old('name', $user->name)); ?>" class="block w-full mt-1 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 px-4 py-3">
            </div>
            <div>
              <label for="email" class="text-sm text-gray-600 font-semibold">Email</label>
              <input type="email" id="email" name="email" value="<?php echo e(old('email', $user->email)); ?>" class="block w-full sm:w-full  mt-1 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 px-4 py-3">
            </div>
          </div>
          <div>
            <label for="company" class="text-sm text-gray-600 font-semibold">Company</label>
            <input type="text" name="company" id="company" value="<?php echo e(optional($user->profile)->get_company() ?? ''); ?>" class="block w-full mt-1 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 px-4 py-3">
          </div>
          <div>
            <label for="company_website" class="text-sm text-gray-600 font-semibold">Company Website</label>
            <input type="url" name="company_website" id="company_website" value="<?php echo e(optional($user->profile)->get_company_website() ?? ''); ?>" class="block w-full mt-1 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 px-4 py-3">
          </div>
          <div>
            <label for="education" class="text-sm text-gray-600 font-semibold">Education</label>
            <input type="text" name="education" id="education" value="<?php echo e(optional($user->profile)->get_education() ?? ''); ?>" class="block w-full mt-1 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 px-4 py-3">
          </div>
          <div>
            <label for="location" class="text-sm text-gray-600 font-semibold">Location</label>
            <input type="text" name="location" id="location" value="<?php echo e(optional($user->profile)->get_location() ?? ''); ?>" class="block w-full mt-1 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 px-4 py-3">
          </div>
          <div>
            <label for="availability"
            class="text-sm text-gray-600 font-semibold">
            Availability
          </label>
            <textarea name="availability" id="availability"
            class="block w-full mt-1 border border-gray-300 rounded-lg
            focus:outline-none focus:border-blue-500 px-4 py-3">
            <?php echo e(optional($user->profile)->get_availability() ?? ''); ?>

          </textarea>
          </div>
          <div>
            <label for="contact_preferences"
            class="text-sm text-gray-600 font-semibold">
            Contact Preferences (Social Media Link)
          </label>
            <input type="url" name="contact_preferences"
            id="contact_preferences"
            placeholder="https://twitter.com/your_username" class="block w-full mt-1 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 px-4 py-3">
          </div>
          <div>
            <label for="job_title" class="text-sm text-gray-600 font-semibold">Job Title</label>
            <input type="text" id="job_title" name="job_title"
            value="<?php echo e(old('job_title', optional($user->profile)->job_title)); ?>" class="block w-full mt-1 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 px-4 py-3">
          </div>
        </div>
        <div class="mt-8">
            <button type="submit" class="bg-blue-500 text-white rounded-full py-3 px-8 font-semibold hover:bg-blue-600 focus:outline-none focus:bg-blue-600 w-full md:w-auto">Save Changes</button>
        </div>
       </form>
    </div>
  </div>
</div>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        const uploadIcon = document.querySelector('.fa-image');
        const fileInput = document.getElementById('upload');

        if (uploadIcon && fileInput) {
            uploadIcon.addEventListener('click', function () {
                fileInput.click();
            });
        }
    });
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/victor/blackpen/laraub/resources/views/profile/profile-edit.blade.php ENDPATH**/ ?>