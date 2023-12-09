<!-- Button trigger modal -->
<a href="" class="text-primary font-weight-bold text-xs" data-bs-toggle="modal"
    data-bs-target="#exampleModal{{ $data->id }}">
    update <i class="bi bi-pencil"></i>
</a>

<!-- Modal -->
<div class="modal fade" id="exampleModal{{ $data->id }}" tabindex="-1"
    aria-labelledby="exampleModalLabel{{ $data->id }}" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content text-center">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel{{ $data->id }}">
                    Update Service
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ url('admin/update_service/' . $data->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="">Image</label>
                        <div class="">
                            <img src="/service/{{ $data->img }}" width="100px" alt="">
                        </div>
                        <input type="file" class="form-control mt-3" name="img">
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <label for="exampleFormControlInput1" class="form-label">
                                Title
                            </label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="title"
                                value="{{ $data->title }}" required>
                        </div>

                        <div class="col-6">
                            <label for="exampleFormControlInput1" class="form-label">
                                Text
                            </label>
                            <textarea name="text" class="form-control" id="" cols="30" rows="10" required>
                                {{ $data->text }}
                            </textarea>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <input type="submit" value="Update" class="btn btn-primary">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
