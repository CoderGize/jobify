<button type="button" class="btn btn-dark mt-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
    <i class="me-2 fs-6 bi bi-plus-lg"></i>
    Update Counter
</button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    Counter Section
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ url('/admin/update_counter') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="modal-body">

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">
                            First Title
                        </label>
                        <input type="text" class="form-control" value="{{ $counter->title1 }}"
                            id="exampleFormControlInput1" name="title1" required>
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">
                            First Number
                        </label>
                        <input type="text" class="form-control" value="{{ $counter->num1 }}"
                            id="exampleFormControlInput1" name="num1" required>
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">
                            First Text
                        </label>
                        <input type="text" class="form-control" value="{{ $counter->text1 }}"
                            id="exampleFormControlInput1" name="text1" required>
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">
                            Second Title
                        </label>
                        <input type="text" class="form-control" value="{{ $counter->title2 }}"
                            id="exampleFormControlInput2" name="title2" required>
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput2" class="form-label">
                            Second Number
                        </label>
                        <input type="text" class="form-control" value="{{ $counter->num2 }}"
                            id="exampleFormControlInput2" name="num2" required>
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">
                            Second Text
                        </label>
                        <input type="text" class="form-control" value="{{ $counter->text2 }}"
                            id="exampleFormControlInput2" name="text2" required>
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">
                            Third Title
                        </label>
                        <input type="text" class="form-control" value="{{ $counter->title3 }}"
                            id="exampleFormControlInput3" name="title3" required>
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput3" class="form-label">
                            Third Number
                        </label>
                        <input type="text" class="form-control" value="{{ $counter->num3 }}"
                            id="exampleFormControlInput3" name="num3" required>
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">
                            Third Text
                        </label>
                        <input type="text" class="form-control" value="{{ $counter->text3 }}"
                            id="exampleFormControlInput2" name="text3" required>
                    </div>


                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">
                            Fourth Title
                        </label>
                        <input type="text" class="form-control" value="{{ $counter->title4 }}"
                            id="exampleFormControlInput4" name="title4" required>
                    </div>

                    <div class="mb-4">
                        <label for="exampleFormControlInput4" class="form-label">
                            Fourth Number
                        </label>
                        <input type="text" class="form-control" value="{{ $counter->num4 }}"
                            id="exampleFormControlInput4" name="num4" required>
                    </div>


                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">
                            Fouurth Text
                        </label>
                        <input type="text" class="form-control" value="{{ $counter->text4 }}"
                            id="exampleFormControlInput2" name="text4" required>
                    </div>


                    <div class="modal-footer">

                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-dark">Add
                            <i class="bi bi-plus-lg"></i>
                        </button>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
