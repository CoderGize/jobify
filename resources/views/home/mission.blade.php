<div class="w-100 overflow-hidden position-relative bg-black text-white" id="home" data-aos="fade">
    <div class="position-absolute w-100 h-100 bg-black opacity-75 top-0 start-0"></div>
    <div class="container py-vh-4 position-relative mt-5 text-center">
        <div class="row d-flex align-items-center justify-content-center py-vh-5">
            <div class="col-12">
                <span class="h5 text-secondary fw-lighter">{!! $first->subtitle !!}</span>
                <h1 class="display-huge mt-3 mb-3 lh-1">{!! $first->title !!}</h1>
            </div>
            <div class="col-12">
                <p class="lead text-secondary">{!! $first->text !!}</p>
            </div>
            <div class="col-12 text-center">
                <a href="#contact" class="btn btn-xl btn-light">
                    Contact Us
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-arrow-down" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                    </svg>
                </a>
            </div>
        </div>
    </div>

</div>

<div class="w-100 position-relative bg-black text-white bg-cover d-flex align-items-center dd">
    <div class="container-fluid px-vw-5">
        <div class="position-absolute w-100 h-50 bg-dark bottom-0 start-0"></div>
        <div class="row d-flex align-items-center position-relative justify-content-center px-0 g-5">
            <div class="col-12 col-lg-6">
                <img src="/first/{{ $first->img1 }}" width="2280" height="1732" alt="abstract image"
                    class="img-fluid position-relative rounded-5 shadow" data-aos="fade-up">
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <img src="/first/{{ $first->img2 }}" width="1116" height="1578" alt="abstract image"
                    class="img-fluid position-relative rounded-5 shadow" data-aos="fade-up" data-aos-duration="2000">
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <img src="/first/{{ $first->img3 }}" width="1116" height="848" alt="abstract image"
                    class="img-fluid position-relative rounded-5 shadow" data-aos="fade-up" data-aos-duration="3000">
            </div>
        </div>
    </div>
</div>
