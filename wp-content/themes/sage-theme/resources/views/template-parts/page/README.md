{{-- 
    <section class="slick-slider">
        <div
            class="container relative carousel py-[120px] w-4/5 max-w-[1001px] shadow-2xl rounded-[57px] min-h-[462px] justify-center items-center">
            {{-- @foreach ($data->module['testimonial1'] as $test) --}}
            @foreach ($test->module['tes'] as $item)
            <div class="w-full flex justify-center md:block">
                <div class="quote md:ml-[14%] ml-[38px] max-w-[659px]">
                    <h2>{{ $item->testimonial->post_content }}</h2>
                    <p>{{ $item->testimonial->post_title }}</p>
                    <p> {{ $pos }}</p>
                </div>
            </div>
            @endforeach
            {{-- @endforeach --}}
        </div>
    </section>
    <?php --}}
