<footer class="bg-black border-top border-dark">
    <div class="container py-vh-4 text-secondary fw-lighter">
        <div class="row">
            <div class="col-12 col-lg-5 py-4 text-center text-lg-start">
                <a class="navbar-brand pe-md-4 fs-4 col-12 col-md-auto text-center" href="index.html">
                    <img src="/images/blogo.svg" width="200px" alt="Jobify" class="m-auto">
                </a>

            </div>
            <div class="col border-end border-dark">
                <span class="h6">Company</span>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a href="#home" class="link-fancy link-fancy-light">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#services" class="link-fancy link-fancy-light">Services</a>
                    </li>

                    <li class="nav-item">
                        <a href="#showroom" class="link-fancy link-fancy-light">Showroom</a>
                    </li>
                    <li class="nav-item">
                        <a href="#plans" class="link-fancy link-fancy-light">Plans</a>
                    </li>
                    <li class="nav-item">
                        <a href="#testimonials" class="link-fancy link-fancy-light">Testimonials</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class="link-fancy link-fancy-light">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="col border-end border-dark">
                <span class="h6">Reach Us</span>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a href="tel:{{ $social->phone }}" class="link-fancy link-fancy-light">
                            Phone: {{ $social->phone }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="mailto:{{ $social->mail }}" class="link-fancy link-fancy-light">Mail:
                            {{ $social->mail }}</a>
                    </li>
                    @if ($social->location_sh == 1)
                        <li class="nav-item">
                            <a href="{{ $social->map }}" class="link-fancy link-fancy-light">
                                @if ($social->location != null)
                                    {{ $social->location }}
                                @else
                                    Location
                                @endif
                            </a>
                        </li>
                    @endif
                    @if ($social->instagram_sh == 1)
                        <li class="nav-item">
                            <a href="{{ $social->instagram }}" class="link-fancy link-fancy-light">
                                Instagram
                            </a>
                        </li>
                    @endif
                    @if ($social->whatsapp_sh == 1)
                        <li class="nav-item">
                            <a href="{{ $social->whatsapp }}" class="link-fancy link-fancy-light">
                                Whatsapp
                            </a>
                        </li>
                    @endif
                    @if ($social->facebook_sh == 1)
                        <li class="nav-item">
                            <a href="{{ $social->facebook }}" class="link-fancy link-fancy-light">
                                Facebook
                            </a>
                        </li>
                    @endif
                    @if ($social->tiktok_sh == 1)
                        <li class="nav-item">
                            <a href="{{ $social->tiktok }}" class="link-fancy link-fancy-light">
                                Threads
                            </a>
                        </li>
                    @endif
                    @if ($social->youtube_sh == 1)
                        <li class="nav-item">
                            <a href="{{ $social->youtube }}" class="link-fancy link-fancy-light">
                                Youtube
                            </a>
                        </li>
                    @endif
                    @if ($social->twitter_sh == 1)
                        <li class="nav-item">
                            <a href="{{ $social->twitter }}" class="link-fancy link-fancy-light">
                                Twitter
                            </a>
                        </li>
                    @endif
                    @if ($social->linkedin_sh == 1)
                        <li class="nav-item">
                            <a href="{{ $social->linkedin }}" class="link-fancy link-fancy-light">
                                Linkedin
                            </a>
                        </li>
                    @endif
                    @if ($social->discord_sh == 1)
                        <li class="nav-item">
                            <a href="{{ $social->discord }}" class="link-fancy link-fancy-light">
                                Discord
                            </a>
                        </li>
                    @endif
                    @if ($social->medium_sh == 1)
                        <li class="nav-item">
                            <a href="{{ $social->medium }}" class="link-fancy link-fancy-light">
                                Medium
                            </a>
                        </li>
                    @endif
                    @if ($social->behance_sh == 1)
                        <li class="nav-item">
                            <a href="{{ $social->behance }}" class="link-fancy link-fancy-light">
                                Tiktok
                            </a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
    <div class="container text-center small py-vh-2 border-top border-dark">
        2023 &copy;
        <a href="https://jobifylb.com" class="link-fancy link-fancy-light">Jobify</a>
        all rights reserved | Powered by
        <a href="https://codergize.com" class="link-fancy link-fancy-light" target="_blank">CoderGize</a>
    </div>
</footer>
