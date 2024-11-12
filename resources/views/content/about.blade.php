<section id="about" class="about">

    <div class="container" data-aos="fade-up">
        <div class="row gx-0">

            <div class="col-lg-7 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                <div class="content">
                    <h3>
                        {!! $about->title !!}
                    </h3>
                    <h2>
                        {!! $about->subtitle !!}
                    </h2>
                    <p>
                        {!! $about->description !!}
                    </p>
                    <div class="text-center text-lg-start">
                        <a href="#values"
                           class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                            <span>Услуги</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                <img src="{{ Voyager::image($about->image) }}" class="img-fluid" alt="">
            </div>

        </div>
    </div>

</section>
