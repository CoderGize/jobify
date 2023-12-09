<button type="button" class="btn btn-dark mt-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
    <i class="me-2 fs-6 bi bi-plus-lg"></i>
    Add Testimonial
</button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Testimonial
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ url('/admin/add_testimonial') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="modal-body">

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">
                            Stars
                        </label>
                        <select class="form-select" name="star" aria-label="Default select example">
                            <option>Open this select menu</option>
                            <option value="1">
                                1
                            </option>
                            <option value="1.5">
                                1.5
                            </option>
                            <option value="2">
                                2
                            </option>
                            <option value="2.5">
                                2.5
                            </option>
                            <option value="3">
                                3
                            </option>
                            <option value="3.5">
                                3.5
                            </option>
                            <option value="4">
                                4
                            </option>
                            <option value="4.5">
                                4.5
                            </option>
                            <option value="5">
                                5
                            </option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">
                            Name
                        </label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="name"
                            placeholder="name..." required>
                    </div>


                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">
                            Role
                        </label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="role"
                            placeholder="role..." required>
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">
                            Message
                        </label>
                        <textarea name="message" class="form-control" id="" cols="30" rows="10" required>
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
