<button type="button" class="btn btn-dark mt-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
    <i class="me-2 fs-6 bi bi-plus-lg"></i>
    Update Mission
</button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    Mission Section
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ url('/admin/update_mission') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="modal-body">

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">
                            Title
                        </label>
                        <input type="text" class="form-control" value="{{ $first->title }}"
                            id="exampleFormControlInput1" name="title" required>
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">
                            Subtitle
                        </label>
                        <input type="text" class="form-control" value="{{ $first->subtitle }}"
                            id="exampleFormControlInput1" name="subtitle" required>
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">
                            Text
                        </label>
                        <textarea name="text" class="form-control" id="" cols="30" rows="10" required>
                            {{ $first->text }}
                        </textarea>
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">
                            First Image
                        </label>
                        <input type="file" class="form-control" value="{{ $first->img1 }}"
                            id="exampleFormControlInput1" name="img1">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">
                            Second Image
                        </label>
                        <input type="file" class="form-control" value="{{ $first->img2 }}"
                            id="exampleFormControlInput1" name="img2">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">
                            Third Image
                        </label>
                        <input type="file" class="form-control" value="{{ $first->img3 }}"
                            id="exampleFormControlInput1" name="img3">
                    </div>

                </div>

                <div class="modal-footer">

                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-dark">Add
                        <i class="bi bi-plus-lg"></i>
                    </button>

                </div>
            </form>
        </div>
    </div>
</div>
