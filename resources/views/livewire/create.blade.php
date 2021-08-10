<!-- Modal -->
<div wire:ignore.self class="modal fade" id="addPostModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Post</h5>
        <button type="button" class="close" wire:click.prevent = "resetInputFields()" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
        <div class="modal-body">
        <form >      
                <div class="form-group">
                    <label for="formGroupExampleInput">Title</label>
                    <input type="text" name="title" class="form-control" wire:model="title" >
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Content</label>
                    <input type="text" name="content" class="form-control"wire:model="content" >
                </div>
                
      </form>
        
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-primary" wire:click.prevent = "store()">Save changes</button>
        </div>
    </div>
  </div>
</div>