<form action="{{ route('update.mission.and.vision',$mission->id) }}" method="POST">
    @csrf
    <div class="modal-body">
        <div class="mb-2">
            <label for="title">Type</label>
            <select name="type" id="type" class="form-select" required>
                <option value="" selected disabled>Select Type</option>
                <option value="mission" @selected($mission->type == 'mission')>Mission</option>
                <option value="vision" @selected($mission->type == 'vision')>Vision</option>
            </select>
        </div>
        <div class="mb-2">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Title" value="{{ $mission->title }}" required>
        </div>
        <div class="mb-2">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control" placeholder="Description" cols="30"
                      rows="10" required>{{ $mission->description }}</textarea>
        </div>
        <div class="mb-2">
            <label for="percentage">Percentage (%)</label>
            <input type="number" name="percentage" id="percentage" max="100" placeholder="Percentage"
                   class="form-control" value="{{ $mission->percentage }}" required>
        </div>
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-success">Update</button>
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
    </div>
</form>

