
<section class="  flex justify-center w-full">
    <div class="w-4/5 flex flex-col lg:flex-row 2xl:w-3/5">
        <div class="w-full ">
            {{$data->content}}
        </div>
        <div class=" relative flex-col-2 fsex items-center w-full justify-center ">
            @foreach ($data->module['icon'] as $item)
                <div>
                    <img class="icon m-w-40 m-h-30" src=" {{ $item->img->url }}}"
                    alt="{{ $item->img->alt }}">
                </div>
            @endforeach        
        </div>

    </div>


</section>
