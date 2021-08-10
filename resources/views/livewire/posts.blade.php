<div class="container">
@include('livewire.create')
@include('livewire.update')
<div class="row">
<div class="col-lg-12 card" >
@if(session()->has('message'))

<div class="alert alert-success">{{session('message')}}</div>
@endif
@if(session()->has('update'))

<div class="alert alert-success">{{session('update')}}</div>
@endif
  <div class="card-header">
    <h2>Posts List  
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addPostModal">
  Add New Posts
</button></h2>
  </div>
  <table class="table table-striped">
        <thead>
            <td>id</td>
            <td>Title</td>
            <td>Content</td>
            
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->content}}</td>
                <td>
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#updatePostModal" wire:click.prevent="edit({{$post->id}})">Edit</button>
                    <button type="button" class="btn btn-danger"  wire:click.prevent="delete({{$post->id}})">Delete</button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</div>
    
</div>