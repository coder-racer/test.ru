<section id="pricing" class="pricing">

    <div class="container" data-aos="fade-up">

        <header class="section-header">
            <p>Информационно Техническое Сопровождение</p>
        </header>

        <div class="row gy-4" data-aos="fade-left">
            @foreach($pricings as $pricing)
            <div class="col-lg-4 col-md-12" data-aos="zoom-in" data-aos-delay="100">
                <div class="box">
                    <h3 style="color: {!! $pricing->title_color !!};">{!! $pricing->title !!}</h3>
                    <div class="price">{!! $pricing->price !!}</div>
                    {!! $pricing->services !!}
                    <a href="tel:+77083961428" class="btn-buy">Заказать</a>
                </div>
            </div>
            @endforeach
        </div>

    </div>

</section><!-- End Pricing Section -->
