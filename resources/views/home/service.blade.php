<div class="bg-black py-vh-3" id="services">
    <div class="container bg-black px-vw-5 py-vh-3 rounded-5 shadow">

        <div class="row gx-5">
            <div class="col-12 col-md-6">
                @php
                    $counter = 0;
                @endphp
                @foreach ($service as $data)
                    @php
                        $counter++;
                    @endphp
                    @if ($counter % 2 == 1)
                        <div class="card bg-transparent mb-5" data-aos="zoom-in-up">
                            <div class="bg-dark shadow rounded-5 p-0">
                                <img src="/service/{{ $data->img }}" width="582" height="327" alt="jobify"
                                    class="img-fluid rounded-5 no-bottom-radius" loading="lazy">
                                <div class="p-5">
                                    <h2 class="fw-lighter">{!! $data->title !!}</h2>
                                    <p class="pb-4 text-secondary">
                                        {!! $data->text !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="col-12 col-md-6">
                <div class="p-5 pt-0 mt-5" data-aos="fade">
                    <span class="h5 text-secondary fw-lighter">Our Services</span>
                    <h2 class="display-4">There is a lot. Here is a small sneak peek</h2>
                </div>

                @php
                    $counter2 = 0;
                @endphp
                @foreach ($service as $data2)
                    @php
                        $counter2++;
                    @endphp
                    @if ($counter2 % 2 == 0)
                        <div class="card bg-transparent mb-5 mt-5" data-aos="zoom-in-up">
                            <div class="bg-dark shadow rounded-5 p-0">
                                <img src="/service/{{ $data2->img }}" width="582" height="390" alt="jobify"
                                    class="img-fluid rounded-5 no-bottom-radius" loading="lazy">
                                <div class="p-5">
                                    <h2 class="fw-lighter">{!! $data2->title !!}</h2>
                                    <p class="pb-4 text-secondary">
                                        {!! $data2->text !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>

    </div>

</div>
