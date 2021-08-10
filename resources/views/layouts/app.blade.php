<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css
">
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js
"></script>
  <title>Laravel Livewire CRUD</title>
  @livewireStyles
</head>
<body>
{{$slot}}
@livewireScripts
<script>

window.livewire.on('postAdded',()=>{
   $('#addPostModal').modal('hide'); 
});

window.livewire.on('postUpdated',()=>{
   $('#updatePostModal').modal('hide'); 
});
</script>
</body>
</html>