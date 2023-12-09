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

                                    @include('admin.second.update_second')

                                </div>
                            </div>
                        </div>

                        <div class="card-header pb-0">
                            <h6>Second Section</h6>
                        </div>


                        <div class="card-body px-0 pt-0 mt-4 pb-2">

                            <div class="row text-center">
                                <div class="col-12 col-sm-6">
                                    <label for="">
                                        Title
                                    </label>
                                    <div class="">
                                        <p>
                                            {{ $second->title }}
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <label for="">
                                        Subtitle
                                    </label>
                                    <div class="">
                                        <p>
                                            {{ $second->subtitle }}
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="row text-center">
                                <div class="col-12 col-sm-6">
                                    <label for="">
                                        First Title
                                    </label>
                                    <div class="">
                                        <p>
                                            {{ $second->title1 }}
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <label for="">
                                        First Text
                                    </label>
                                    <div class="">
                                        <p>
                                            {{ $second->text1 }}
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="row text-center">
                                <div class="col-12 col-sm-6">
                                    <label for="">
                                        Second Title
                                    </label>
                                    <div class="">
                                        <p>
                                            {{ $second->title2 }}
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <label for="">
                                        Second Text
                                    </label>
                                    <div class="">
                                        <p>
                                            {{ $second->text2 }}
                                        </p>
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
