<form action="{{ route('update.event',$event->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="modal-body">
        <div class="mb-2">
            <label for="name">Event Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $event->name }}" placeholder="Event Name"
                   required>
        </div>
        <div class="mb-2">
            <label for="description">Description</label>
            <textarea name="description" id="description" cols="30" rows="5" class="form-control" placeholder="Description.."></textarea>
        </div>
        <div class="mb-2">
            <label for="thumbnail">Thumbnail</label>
            <input type="file" name="thumbnail" id="thumbnail" class="form-control">
            <img src="{{ asset($event->thumbnail) }}"  width="200"  class="img-thumbnail">
        </div>
        <div class="mb-2">
            <label for="date">Date</label>
            <input type="datetime-local" name="date" id="date" class="form-control" value="{{ $event->date }}" placeholder="Event Name"
                   required>
        </div>
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-success">Update</button>
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
    </div>
</form>
