<section id="values" class="values">

    <div class="container" data-aos="fade-up">

        <header class="section-header">
            <!--          <h2>Услуги</h2>-->
            <p>Услуги</p>
        </header>

        <div class="row">
            @foreach($services as $service)
            <div class="col-lg-3" data-aos="fade-up" data-aos-delay="200">
                <div class="box">
                    <img src="{{ Voyager::image($service->image) }}" class="img-fluid" alt="">
                    <b>{!! $service->description !!}</b>
                </div>
            </div>
            @endforeach
        </div>

    </div>

</section><!-- End Values Section -->

<!-- ======= Counts Section ======= -->
<section id="counts" class="counts">
    <div class="container" data-aos="fade-up">

        <div class="row gy-4">

            <div class="col-lg-3 col-md-6">
                <div class="count-box">
                    <i class="bi bi-emoji-smile"></i>
                    <div>
                            <span data-purecounter-start="0" data-purecounter-end="56" data-purecounter-duration="1"
                                  class="purecounter"></span>
                        <p>Счастливых клиентов</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="count-box">
                    <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
                    <div>
                            <span data-purecounter-start="0" data-purecounter-end="39" data-purecounter-duration="1"
                                  class="purecounter"></span>
                        <p>Проектов</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="count-box">
                    <i class="bi bi-headset" style="color: #15be56;"></i>
                    <div>
                            <span data-purecounter-start="0" data-purecounter-end="463" data-purecounter-duration="1"
                                  class="purecounter"></span>
                        <p>Отработанных часов</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="count-box">
                    <i class="bi bi-people" style="color: #bb0852;"></i>
                    <div>
                            <span data-purecounter-start="0" data-purecounter-end="6" data-purecounter-duration="1"
                                  class="purecounter"></span>
                        <p>Квалифицированных специалистов</p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section><!-- End Counts Section -->

