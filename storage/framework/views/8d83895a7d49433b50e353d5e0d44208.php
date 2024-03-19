<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['id', 'name', 'value' => '']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['id', 'name', 'value' => '']); ?>
<?php foreach (array_filter((['id', 'name', 'value' => '']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<input
    type="hidden"
    name="<?php echo e($name); ?>"
    id="<?php echo e($id); ?>_input"
    value="<?php echo e($value); ?>"
/>

<trix-toolbar
    class="[&_.trix-button]:bg-white [&_.trix-button.trix-active]:bg-gray-300"
    id="<?php echo e($id); ?>_toolbar"
></trix-toolbar>

<trix-editor
    id="<?php echo e($id); ?>"
    toolbar="<?php echo e($id); ?>_toolbar"
    input="<?php echo e($id); ?>_input"
    <?php echo e($attributes->merge(['class' => 'trix-content border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:ring-1 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm dark:[&_pre]:!bg-gray-700 dark:[&_pre]:rounded dark:[&_pre]:!text-white'])); ?>

></trix-editor>
<?php /**PATH /home/abara/web/laraub/resources/views/components/trix-input.blade.php ENDPATH**/ ?>