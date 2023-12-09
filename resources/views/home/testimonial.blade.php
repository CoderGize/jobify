<div class="bg-dark py-vh-5" id="testimonials">
    <div class="container px-vw-5">
        <div class="row d-flex gx-5 align-items-center">
            <div class="col-12 col-lg-6">
                @php
                    $test = 0;
                @endphp
                @foreach ($testimonial as $data)
                    @php
                        $test++;
                    @endphp
                    @if ($test % 2 == 1)
                        <div class="rounded-5 bg-black mt-5 p-5 shadow" data-aos="zoom-in-right">
                            <div class="fs-1">
                                @if ($data->star == 1)
                                    <img src="/images/star.svg" alt="jobify">
                                @elseif ($data->star == 1.5)
                                    <img src="/images/star.svg" alt="jobify">
                                    <img src="/images/semistar.svg" alt="jobify">
                                @elseif ($data->star == 2)
                                    <img src="/images/star.svg" alt="jobify">
                                    <img src="/images/star.svg" alt="jobify">
                                @elseif ($data->star == 2.5)
                                    <img src="/images/star.svg" alt="jobify">
                                    <img src="/images/star.svg" alt="jobify">
                                    <img src="/images/semistar.svg" alt="jobify">
                                @elseif ($data->star == 3)
                                    <img src="/images/star.svg" alt="jobify">
                                    <img src="/images/star.svg" alt="jobify">
                                    <img src="/images/star.svg" alt="jobify">
                                @elseif ($data->star == 3.5)
                                    <img src="/images/star.svg" alt="jobify">
                                    <img src="/images/star.svg" alt="jobify">
                                    <img src="/images/star.svg" alt="jobify">
                                    <img src="/images/semistar.svg" alt="jobify">
                                @elseif ($data->star == 4)
                                    <img src="/images/star.svg" alt="jobify">
                                    <img src="/images/star.svg" alt="jobify">
                                    <img src="/images/star.svg" alt="jobify">
                                    <img src="/images/star.svg" alt="jobify">
                                @elseif ($data->star == 4.5)
                                    <img src="/images/star.svg" alt="jobify">
                                    <img src="/images/star.svg" alt="jobify">
                                    <img src="/images/star.svg" alt="jobify">
                                    <img src="/images/star.svg" alt="jobify">
                                    <img src="/images/semistar.svg" alt="jobify">
                                @elseif ($data->star == 5)
                                    <img src="/images/star.svg" alt="jobify">
                                    <img src="/images/star.svg" alt="jobify">
                                    <img src="/images/star.svg" alt="jobify">
                                    <img src="/images/star.svg" alt="jobify">
                                    <img src="/images/star.svg" alt="jobify">
                                @endif
                            </div>
                            <p class="text-secondary lead">"{!! $data->message !!}"</p>
                            <div
                                class="d-flex justify-content-start align-items-center border-top border-secondary pt-3">
                                <div>
                                    <span class="h6 fw-5">{!! $data->name !!}</span><br>
                                    <small class="text-secondary">{!! $data->role !!}</small>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach

            </div>
            <div class="col-12 col-lg-6">

                <div class="p-5 pt-0" data-aos="fade">
                    <span class="h5 text-secondary fw-lighter">What others have to say</span>
                    <h2 class="display-4">Testimonials.</h2>
                </div>


                @php
                    $test2 = 0;
                @endphp
                @foreach ($testimonial as $data2)
                    @php
                        $test2++;
                    @endphp
                    @if ($test2 % 2 == 0)
                        <div class="rounded-5 bg-black p-5 shadow mt-5 gradient" data-aos="zoom-in-left">
                            <div class="fs-1">
                                @if ($data2->star == 1)
                                    <img src="/images/star.svg" alt="jobify">
                                @elseif ($data2->star == 1.5)
                                    <img src="/images/star.svg" alt="jobify">
                                    <img src="/images/semistar.svg" alt="jobify">
                                @elseif ($data2->star == 2)
                                    <img src="/images/star.svg" alt="jobify">
                                    <img src="/images/star.svg" alt="jobify">
                                @elseif ($data2->star == 2.5)
                                    <img src="/images/star.svg" alt="jobify">
                                    <img src="/images/star.svg" alt="jobify">
                                    <img src="/images/semistar.svg" alt="jobify">
                                @elseif ($data2->star == 3)
                                    <img src="/images/star.svg" alt="jobify">
                                    <img src="/images/star.svg" alt="jobify">
                                    <img src="/images/star.svg" alt="jobify">
                                @elseif ($data2->star == 3.5)
                                    <img src="/images/star.svg" alt="jobify">
                                    <img src="/images/star.svg" alt="jobify">
                                    <img src="/images/star.svg" alt="jobify">
                                    <img src="/images/semistar.svg" alt="jobify">
                                @elseif ($data2->star == 4)
                                    <img src="/images/star.svg" alt="jobify">
                                    <img src="/images/star.svg" alt="jobify">
                                    <img src="/images/star.svg" alt="jobify">
                                    <img src="/images/star.svg" alt="jobify">
                                @elseif ($data2->star == 4.5)
                                    <img src="/images/star.svg" alt="jobify">
                                    <img src="/images/star.svg" alt="jobify">
                                    <img src="/images/star.svg" alt="jobify">
                                    <img src="/images/star.svg" alt="jobify">
                                    <img src="/images/semistar.svg" alt="jobify">
                                @elseif ($data2->star == 5)
                                    <img src="/images/star.svg" alt="jobify">
                                    <img src="/images/star.svg" alt="jobify">
                                    <img src="/images/star.svg" alt="jobify">
                                    <img src="/images/star.svg" alt="jobify">
                                    <img src="/images/star.svg" alt="jobify">
                                @endif
                            </div>
                            <p class="lead">"{!! $data2->message !!}"</p>
                            <div class="d-flex justify-content-start align-items-center border-top pt-3">
                                <div>
                                    <span class="h6 fw-5">{!! $data2->name !!}</span><br>
                                    <small class="text-secondary">{!! $data2->role !!}</small>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>

</div>
