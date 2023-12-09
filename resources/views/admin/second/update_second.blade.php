<button type="button" class="btn btn-dark mt-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
    <i class="me-2 fs-6 bi bi-plus-lg"></i>
    Update Second Section
</button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    Second Section
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ url('/admin/update_second') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="modal-body">

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">
                            Title
                        </label>
                        <input type="text" class="form-control" value="{{ $second->title }}"
                            id="exampleFormControlInput1" name="title" required>
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">
                            Subtitle
                        </label>
                        <input type="text" class="form-control" value="{{ $second->subtitle }}"
                            id="exampleFormControlInput1" name="subtitle" required>
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">
                            First Title
                        </label>
                        <input type="text" class="form-control" value="{{ $second->title1 }}"
                            id="exampleFormControlInput1" name="title1" required>
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">
                            First Text
                        </label>
                        <textarea name="text1" class="form-control" id="" cols="30" rows="10" required>
                            {{ $second->text1 }}
                        </textarea>
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">
                            Second Title
                        </label>
                        <input type="text" class="form-control" value="{{ $second->title2 }}"
                            id="exampleFormControlInput2" name="title2" required>
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">
                            Second Text
                        </label>
                        <textarea name="text2" class="form-control" id="" cols="30" rows="10" required>
                            {{ $second->text2 }}
                        </textarea>
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
