<div class="bg-black" id="contact">
    <div class="container px-vw-5 py-vh-5">
        <div class="row d-flex align-items-center">
            <div class="text-center" data-aos="zoom-in-right">
                <span class="h5 text-secondary fw-lighter">You're one step away</span>
                <h2 class="display-4">Contact Us</h2>
            </div>
            <div class="col-12 bg-dark rounded-5 py-vh-3 text-center my-5" data-aos="zoom-in-up">
                <form action="{{ url('/message') }}" method="POST" enctype="multipart/form-data" autocomplete="off">
                    @csrf
                    <div class="row">
                        @if (session()->has('message'))
                            <span class="" style="margin-bottom: 20px; color: green !important;">
                                {{ session()->get('message') }}
                                <i class="bi bi-check2 fs-2"></i>
                            </span>
                        @endif
                        <div class="col-12 col-md-6 text-start col-lg-4">
                            <label for="" class="text-start">Name</label>
                            <input type="text" class="form-control text-white bg-dark" name="name"
                                placeholder="John Doe" required>
                        </div>
                        <div class="col-12 col-md-6 text-start col-lg-4">
                            <label for="" class="text-start">Email</label>
                            <input type="email" class="form-control text-white bg-dark"
                                placeholder="example@example.com" name="email" required>
                        </div>
                        <div class="col-12 col-md-6 text-start col-lg-4">
                            <label for="" class="text-start">Phone</label>
                            <input type="text" class="form-control text-white bg-dark" placeholder="Phone Number"
                                name="phone" required>
                        </div>
                        <div class="col-12 col-md-6 text-start col-lg-6" style="margin-top: 40px !important;">
                            <label for="" class="text-start">Plan</label>
                            <select class=" form-control text-white bg-dark" name="plan" aria-label="Select a Plan"
                                required>
                                <option disabled selected value="">Pick a Plan
                                </option>
                                @foreach ($pricing as $pricing)
                                    <option value="{{ $pricing->name }}">{{ $pricing->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12 col-md-6 text-start col-lg-6" style="margin-top: 40px !important;">
                            <label for="" class="text-start">Promo Code</label>
                            <input type="text" autocomplete="off" class="form-control text-white bg-dark"
                                placeholder="Code" name="promo">
                            @if (session()->has('notactive'))
                                <span class="fw-lighter" style="margin-left: 20px; color: red !important;">
                                    {{ session()->get('notactive') }}
                                </span>
                            @endif
                            @if (session()->has('promoerr'))
                                <span class="fw-lighter" style="margin-left: 20px; color: red !important;">
                                    {{ session()->get('promoerr') }}
                                </span>
                            @endif

                        </div>
                        <div class="col-12 text-start " style="margin-top: 40px !important;">
                            <button type="submit" class="btn btn-light">
                                Submit
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
