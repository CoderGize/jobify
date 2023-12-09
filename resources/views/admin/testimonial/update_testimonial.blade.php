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
                    Update Testimonial
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ url('admin/update_testimonial/' . $data->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="modal-body">


                    <div class="row">

                        <div class="col-6">
                            <div class="">
                                <label for="exampleFormControlInput1" class="form-label">
                                    Stars
                                </label>
                                <select class="form-select" name="star" aria-label="Default select example">
                                    <option value="1" {{ $data->star === '1' ? 'selected' : '' }}>
                                        1
                                    </option>
                                    <option value="1.5" {{ $data->star === '1.5' ? 'selected' : '' }}>
                                        1.5
                                    </option>
                                    <option value="2" {{ $data->star === '2' ? 'selected' : '' }}>
                                        2
                                    </option>
                                    <option value="2.5" {{ $data->star === '2,5' ? 'selected' : '' }}>
                                        2.5
                                    </option>
                                    <option value="3" {{ $data->star === '3' ? 'selected' : '' }}>
                                        3
                                    </option>
                                    <option value="3.5" {{ $data->star === '3.5' ? 'selected' : '' }}>
                                        3.5
                                    </option>
                                    <option value="4" {{ $data->star === '4' ? 'selected' : '' }}>
                                        4
                                    </option>
                                    <option value="4.5" {{ $data->star === '4.5' ? 'selected' : '' }}>
                                        4.5
                                    </option>
                                    <option value="5" {{ $data->star === '5' ? 'selected' : '' }}>
                                        5
                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="col-6">
                            <label for="exampleFormControlInput1" class="form-label">
                                name
                            </label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="name"
                                value="{{ $data->name }}" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <label for="exampleFormControlInput1" class="form-label">
                                Role
                            </label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="role"
                                value="{{ $data->role }}" required>
                        </div>

                        <div class="col-6">
                            <label for="exampleFormControlInput1" class="form-label">
                                Message
                            </label>
                            <textarea name="message" class="form-control" id="" cols="30" rows="10" required>
                                {{ $data->message }}
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
