
<section class=" -mt-28 lg:-mt-20 2xl:-mt-24 3xl:-mt-28 content-1">
  <div class="banner relative mb-100 lg:mb-0">
    <img class="min-w-1702 lg:min-w-1678 2xl:w-full 2xl:min-w-1610 5xl:min-w-full" src=" {{$data->module['anh']->url}} "alt="{{$data->module['anh']->alt}}">
    <div class="absolute top-0 pt-82.5 l lg:pt-82.5 3xl:pt-90 lg:pl-50 2xl:pl-74 3xl:pl-377 lg:flex justify-between w-full block">
      <div class=" mt-[10%] banner-left text-center flex text-white flex-col items-center lg:block lg:text-left 2xl:pr-18 2xl:w-509 2xl:pt-18 lg:pr-10 lg:pt-22.5 xl:pt-37 2xl:mr-18">
        <h2 >{{$data->heading}}</h2>  
        <p >{{$data->title}}</p>
        <button type="button" class="rounded-3xl   text-center lg:ml-0  banner-button ">{{$data->decs}}</button>
      </div>
      <div class=" banner-right ">
        <img class=" mt-[10%] min-w-600 xl:p-0 min-w-854 lg:min-w-726 2xl:min-w-975" src=" {{$data->module['anhl']->url}} "alt="{{$data->module['anhl']->alt}}">
      </div>  
    </div>
  </div>
</section>
<?php 
?>
