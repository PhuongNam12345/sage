
    <section class=" flex justify-center w-full">
        <div class=" w-4/5 flex flex-row 2xl:w-3/5 ">
            @foreach ($data->module['content'] as $item)
            <div class="w-full text-center items-center flex flex-col lg:flex-row lg:items-start ">
                <div class="my-10 w-full items-center flex-col flex md:mr-5">
                    <img class="mb-8 min-w-600 xl:p-0 min-w-854 lg:min-w-726 2xl:min-w-975" src="{{ $item->icon->url }}"
                        alt="{{ $item->icon->alt }}">
                    <h3>{{ $item->contentheading }}</h3>
                    <p>{{ $item->contentp }}</p>
                    @if ($item->link->url)
                        <a class="no-underline text-red-200"  href="{{ $item->link->url }}"
                            target="{{ $item->link->target }}">{{ $item->link->title }}
                            <span class="icomoon icon-chevron-right w-3"> sss</span>
                        </a>
                    @endif
                   
                </div>
                
            </div>
            @endforeach
            
        </div>
    </section>
<?php
var_dump($data->module['content']);
