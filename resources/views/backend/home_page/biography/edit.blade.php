<form action="{{ route('update.biography',$biography->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="modal-body">
        <div class="mb-2">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Title" value="{{ $biography->title }}"
                   required>
        </div>
        <div class="mb-2">
            <label for="description">Description</label>
            <textarea name="description" id="description" cols="30" rows="5" class="form-control"  placeholder="Description">value="{{ $biography->description }}"</textarea>
        </div>
        <div class="mb-2">
            <label for="date">Date</label>
            <input type="date" name="date" id="date" class="form-control" placeholder="Date" value="{{ $biography->date->format('Y-m-d') }}"
                   required>
        </div>
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-success">Add</button>
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
    </div>
</form>
