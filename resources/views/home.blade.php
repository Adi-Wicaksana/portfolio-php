<div class="row row-no-margin swiper-slide">
    <div class="col-12 home-content-wrap">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 ps-0 ps-sm-3 ps-lg-5">
                    <div class="home-greeting-div">
                        <div>
                            <p class="font-greeting">Hello I'm</p>
                            <p class="font-name">I KETUT ADI</p>
                            <p class="font-description">
                                a Full Stack Developer located in Indonesia. I build anything from mobile to web app.
                                <br /><br />
                                4 years of experience in web development. Feel free to talk to me okay.
                            </p>
                        </div>
                    </div>
                    <div class="mb-4" style="display: flex;">
                        <div>
                            <button class="btn btn-default icon-medsos" data-toggle="tooltip" data-placement="top"
                                title="anodimous.dev@gmail.com">
                                <i class="bi bi-envelope" style="font-size: 1.25rem;"></i>
                            </button>
                            <button class="btn btn-default icon-medsos mx-3" data-toggle="tooltip" data-placement="top"
                                title="+6281224164852">
                                <i class="bi bi-whatsapp"></i>
                            </button>
                            <button class="btn btn-default icon-medsos" data-toggle="tooltip" data-placement="top"
                                title="wicaksana_adi">
                                <i class="bi bi-instagram"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="home-pp-div">
                        <img class="img-fluid pp" src="{{ asset('images/pp.png') }}" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ps-5 home-skill-div">
                        <div class="home-familiar-container">
                            <div class="home-familiar-div">
                                <div class="ribbon ribbon-top-right"><span>Familiar</span></div>
                                <div class="swiper-familiar" style="width: 100%; overflow: hidden;">
                                    <div class="swiper-wrapper">
                                        @if (isset($skills))
                                            @for ($i = 0; $i < count($skills); $i++)
                                                <div class="swiper-slide">
                                                    <div class="home-skill-wrap">
                                                        <div class="mx-1 my-1 p-2 home-skill-logo">
                                                            <img class="img-fluid"
                                                                src="{{ asset($skills[$i]['image']) }}" />
                                                        </div>
                                                        <div class="me-1 my-1 ps-2 py-1 home-skill-desc">
                                                            <p class="font-skill-title"> {{ $skills[$i]['title'] }} </p>
                                                            <p class="font-skill-desc"> {!! $skills[$i]['desc'] !!} </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endfor
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="home-inspired-div">
                            <p class="py-1 font-inspired">Design Inspired by : Irvan Moses</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
