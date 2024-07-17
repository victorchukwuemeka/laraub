<?php

namespace App\Livewire;

use App\Models\LaravelProjects;
use App\Models\Upvote;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UpvoteButton extends Component
{
    public $project;
    public $upvoted = false;
    //dd('vic');
    public function mount(LaravelProjects $project)
    {
      $this->project = $project;
      $this->upvoted = $this->userHasUpvoted() ?? false;
      //$project->upvotedByUser(auth()->user());
    }

    public function upvote(){

      if (!$this->upvoted) {
        Upvote::create([
          'user_id' => Auth::id(),
          'project_id' => $project->id,
        ]);
        $this->upvoted = true;
        $this->emit('upvoteUpdated', $this->project->votes->count());
      }else{
        $this->upvoted = false;
        return;
      }
    }

    private function userHasUpvoted()
    {
       //dd($this->project->id);
        return LaravelProjects::where('id', $this->project->id)
            ->where('user_id', Auth::id())
            ->exists();
    }

    public function render()
    {
        return view('livewire.upvote-button');
    }
}
