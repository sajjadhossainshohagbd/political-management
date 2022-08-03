<form action="{{ route('update.gallery',$gallery->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="modal-body">
        <div class="mb-2">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Title.." value="{{ $gallery->title }}" required>
        </div>
        <div class="mb-2">
            <label for="photo">Photo</label>
            <input type="file" name="photo" id="photo" class="form-control">
            <img src="{{ asset($gallery->photo) }}" width="100" class="img-thumbnail">
        </div>
        @if($gallery->type == 'video')
        <div class="mb-2">
            <label for="link">Video Link</label>
            <input type="url" name="link" id="gallery_link" class="form-control" placeholder="Video Link..." value="{{ $gallery->link }}">
        </div>
        @endif
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-success">Update</button>
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
    </div>
</form>
