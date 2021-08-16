<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class Posts extends Component
{
    public $ids;
    public $title;
    public $content;

    //To reset the input field in modal after submiting the form data
    public function resetInputFields(){
        $this->title = '';
        $this->content = '';
    }

    //Stores Submited Formd Data
    public function store(){
        $validatedData = $this->validate([
            'title'=>'required',
            'content'=>'required'
        ]);

        //Validate the data
        Post::create($validatedData);

        //Set a message
        session()->flash('message','Post Created Successfully!');

        //Call Reset Input field function
        $this->resetInputFields();

        //Emit to close modal after submiting it
        $this->emit('postAdded');
    }


    //Edits the record

    public function edit($ids){
    
        $post = Post::where('id',$ids)->first();
    
        $this->ids = $post->id;
        $this->title = $post->title;
        $this->content = $post->content;
        
    }

    //Update the edit data
    public function update(){
        
        //Validate before updating
        $this->validate([
            'title'=>'required',
            'content'=>'required'
        ]);
        
        //Check if the specific record id is submited
        if($this->ids)
        {

            $post = Post::find($this->ids);

            $post->update([
                'title' => $this->title,
                'content' => $this->content,
                ]);
            
            //Set session flash message
            session()->flash('update','Post updated Successfully!');
            
            //Reset the input fields to empty
            $this->resetInputFields();
            
            //Emit To Close Modal after updating
            $this->emit('postUpdated');
        }
    }

    //Deletes the speitic recored
    public function delete($id){
        
        //Check if record id is passed
        if($id){
            
            Post::where('id',$id)->delete();
            session()->flash('message','Post Deleted Successfully');
        }
    }
    public function render()
    {
        $posts = Post::orderBy('id','DESC')->get();
        return view('livewire.posts',['posts'=>$posts]);
    }
}
