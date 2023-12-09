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

                                    @include('admin.counter.update_counter')

                                </div>
                            </div>
                        </div>

                        <div class="card-header pb-0">
                            <h6>Counter</h6>
                        </div>


                        <div class="card-body px-0 pt-0 mt-4 pb-2">

                            <div class="row text-center">

                                <div class="col-12 col-sm-4">
                                    <div class="">
                                        <label for="">
                                            First Title
                                        </label>
                                        <div class="">
                                            <p class="">
                                                {{ $counter->title1 }}
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-4">
                                    <div class="">
                                        <label for="">
                                            First Number
                                        </label>
                                        <div class="">
                                            <p class="">
                                                {{ $counter->num1 }}
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-4">
                                    <div class="">
                                        <label for="">
                                            First Text
                                        </label>
                                        <div class="">
                                            <p class="">
                                                {{ $counter->text1 }}
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row text-center">

                                <div class="col-12 col-sm-4">
                                    <div class="">
                                        <label for="">
                                            Second Title
                                        </label>
                                        <div class="">
                                            <p class="">
                                                {{ $counter->title2 }}
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-4">
                                    <div class="">
                                        <label for="">
                                            Second Number
                                        </label>
                                        <div class="">
                                            <p class="">
                                                {{ $counter->num2 }}
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-4">
                                    <div class="">
                                        <label for="">
                                            Second Text
                                        </label>
                                        <div class="">
                                            <p class="">
                                                {{ $counter->text2 }}
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row text-center">

                                <div class="col-12 col-sm-4">
                                    <div class="">
                                        <label for="">
                                            Third Title
                                        </label>
                                        <div class="">
                                            <p class="">
                                                {{ $counter->title3 }}
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-4">
                                    <div class="">
                                        <label for="">
                                            Third Number
                                        </label>
                                        <div class="">
                                            <p class="">
                                                {{ $counter->num3 }}
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-4">
                                    <div class="">
                                        <label for="">
                                            Third Text
                                        </label>
                                        <div class="">
                                            <p class="">
                                                {{ $counter->text3 }}
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row text-center">

                                <div class="col-12 col-sm-4">
                                    <div class="">
                                        <label for="">
                                            Fourth Title
                                        </label>
                                        <div class="">
                                            <p class="">
                                                {{ $counter->title4 }}
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-4">
                                    <div class="">
                                        <label for="">
                                            Fourth Number
                                        </label>
                                        <div class="">
                                            <p class="">
                                                {{ $counter->num4 }}
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-4">
                                    <div class="">
                                        <label for="">
                                            Fourth Text
                                        </label>
                                        <div class="">
                                            <p class="">
                                                {{ $counter->text4 }}
                                            </p>
                                        </div>
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
