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
                    Update Promo
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ url('admin/update_promo/' . $data->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">

                    <div class="row">
                        <div class="col-6">
                            <label for="exampleFormControlInput1" class="form-label">
                                Promo
                            </label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="promo"
                                value="{{ $data->promo }}" required>
                        </div>
                        <div class="col-6">
                            <label for="exampleFormControlInput1" class="form-label">
                                Status
                            </label>
                            <select class="form-select" name="active" aria-label="Default select example">
                                <option value="1" {{ $data->active == '1' ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ $data->active == '0' ? 'selected' : '' }}>Not Active</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4">
                            <label for="exampleFormControlInput1" class="form-label">
                                Name
                            </label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="name"
                                value="{{ $data->name }}" required>
                        </div>

                        <div class="col-4">
                            <label for="exampleFormControlInput1" class="form-label">
                                Email
                            </label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" name="email"
                                value="{{ $data->email }}" required>
                        </div>

                        <div class="col-4">
                            <label for="exampleFormControlInput1" class="form-label">
                                Phone
                            </label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="phone"
                                value="{{ $data->phone }}" required>
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
