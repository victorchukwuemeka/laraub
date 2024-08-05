
<button wire:click="upvote"
        class="text-indigo-500 hover:text-indigo-700 underline"
        :disabled="$upvoted">
  <!--[if BLOCK]><![endif]--><?php if($upvoted): ?>
    Upvoted
  <?php else: ?>
    Upvote
  <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
</button>
<?php /**PATH /home/abara/web/laraub/resources/views/livewire/upvote-button.blade.php ENDPATH**/ ?>