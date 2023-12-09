<div class="bg-dark position-relative" id="showroom">
    <div class="container px-vw-5 py-vh-5">
        <div class="row d-flex align-items-center">

            <div class="col-12 col-lg-7">
                <img class="img-fluid rounded-5 mb-n5 shadow" src="/show/{{ $show->img1 }}" width="512" height="512"
                    alt="Jobify" loading="lazy" data-aos="zoom-in-right">
                <img class="img-fluid rounded-5 showimg mb-n5 shadow" src="/show/{{ $show->img2 }}" width="512"
                    height="512" alt="Jobify" loading="lazy" data-aos="zoom-in-up">
            </div>
            <div class="col-12 col-lg-5 bg-dark rounded-5 py-5" data-aos="fade">
                <h2 class="display-4">
                    {!! $show->title !!}
                </h2>
                <span class="h5 text-secondary fw-lighter">{!! $show->subtitle !!}</span>
            </div>
        </div>
    </div>
</div>
