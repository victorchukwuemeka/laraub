
<button wire:click="upvote"
        class="text-indigo-500 hover:text-indigo-700 underline"
        :disabled="$upvoted">
  @if ($upvoted)
    Upvoted
  @else
    Upvote
  @endif
</button>
