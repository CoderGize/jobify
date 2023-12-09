<div class="bg-black" id="plans">
    <div class="container px-vw-5 py-vh-5">
        <div class="row d-flex align-items-center">
            <div class="col-12 col-lg-5 text-center text-lg-end" data-aos="zoom-in-right">
                <span class="h5 text-secondary fw-lighter">What we charge</span>
                <h2 class="display-4">You get all our knowledge for simple prices</h2>
            </div>
            @php
                $price = 0;
            @endphp
            @foreach ($pricing as $pricing)
                @php
                    $price++;
                @endphp
                @if ($price == 1)
                    <div class="col-12 col-lg-7 bg-dark rounded-5 py-vh-3 text-center my-5" data-aos="zoom-in-up">
                        <h3 class="display-huge mb-5">
                            <span class="fw-light">{{ $pricing->name }}</span>
                        </h3>
                        <h2 class="display-huge mb-5">
                            <span class="fs-4 me-2 fw-light">$</span>
                            <span class="border-bottom border-1">{{ $pricing->price }}</span>
                            <span class="fs-6 fw-light"></span>
                        </h2>
                        <p class="lead text-secondary">
                            {!! $pricing->text !!}
                        </p>
                        {{-- <a href="#" class="btn btn-xl btn-light">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                            </svg>
                        </a> --}}
                    </div>
                @else
                    <div class="col-12 {{ $price == 2 ? 'pro' : '' }} {{ $price == 3 ? 'extra' : '' }} rounded-5 py-vh-3 text-center my-5"
                        data-aos="zoom-in-up">
                        <h3 class="display-huge mb-5">
                            <span class="fw-light">{{ $pricing->name }}</span>
                        </h3>
                        <h2 class="display-huge mb-5">
                            <span class="fs-4 me-2 fw-light">$</span>
                            <span class="border-bottom border-1">{{ $pricing->price }}</span>
                            <span class="fs-6 fw-light"></span>
                        </h2>
                        <p class="lead {{ $price == 2 ? 'text-black' : '' }} {{ $price == 3 ? 'text-white' : '' }}">
                            {!! $pricing->text !!}
                        </p>
                    </div>
                @endif
            @endforeach
        </div>
    </div>

</div>
