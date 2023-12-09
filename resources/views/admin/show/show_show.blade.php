<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
</head>

<body class="g-sidenav-show   bg-gray-100">

    @include('admin.sidebar')
    <main class="main-content position-relative border-radius-lg ">
        <!-- Navbar -->
        @include('admin.navbar')
        <!-- End Navbar -->
        <div class="container-fluid py-4">

            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">

                        <div class="row mb-3">
                            <div class="col-12">
                                <div class="d-flex justify-content-center">

                                    @include('admin.show.update_show')

                                </div>
                            </div>
                        </div>

                        <div class="card-header pb-0">
                            <h6>Show Section</h6>
                        </div>


                        <div class="card-body px-0 pt-0 mt-4 pb-2">

                            <div class="row text-center">
                                <div class="col-12 col-sm-6">
                                    <label for="">
                                        Title
                                    </label>
                                    <div class="">
                                        <p>
                                            {{ $show->title }}
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <label for="">
                                        Subtitle
                                    </label>
                                    <div class="">
                                        <p>
                                            {{ $show->subtitle }}
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="row text-center">
                                <div class="col-12 col-sm-6">
                                    <label for="">
                                        First Image
                                    </label>
                                    <div class="">
                                        <img src="/show/{{ $show->img1 }}" class="w-25" alt="">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <label for="">
                                        Second Image
                                    </label>
                                    <div class="">
                                        <div class="">
                                            <img src="/show/{{ $show->img2 }}" class="w-25" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('admin.footer')
        </div>
    </main>

    @include('admin.script')

</body>

</html>
