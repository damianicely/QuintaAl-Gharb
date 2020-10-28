@extends('layout')

@section('title')
Quinta Al-Gharb | Laranja
@endsection

@section('body')

      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-0">
        <div class="container-fluid">
          <div class="row h-full border-bottom border-300">
            <div class="col-lg-6 px-0 order-lg-2" data-zanim-lg='{"animation":"slide-left","delay":0.4}' data-zanim-trigger="scroll">
              <div class="owl-carousel owl-theme owl-dots-inner owl-theme-white h-100" data-options='{"items":1,"autoplay":true,"loop":true,"autoplayHoverPause":true,"animateOut":"fadeOut","nav":true}' data-zanim-lg='{"animation":"zoom-out","delay":0}'
                data-zanim-trigger="scroll">
                <div class="min-vh-lg-100 py-9">
                  <div class="bg-holder" style="background-image:url(/img/bungalow/laranja_front1.jpg);"></div>
                  <!--/.bg-holder-->
                </div>
                <div class="min-vh-lg-100 py-9">
                  <div class="bg-holder" style="background-image:url(/img/bungalow/laranja_kit1.jpg);"></div>
                  <!--/.bg-holder-->
                </div>
                <div class="min-vh-lg-100 py-9">
                  <div class="bg-holder" style="background-image:url(/img/bungalow/laranja_bed1.jpg);"></div>
                  <!--/.bg-holder-->
                </div>
              </div>
            </div>
            <div class="col-lg-6 bg-white py-7 py-md-8">
              <div class="row align-items-center justify-content-center h-100">
              <div class="col-lg-10 text-black text-center text-lg-left" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                <div class="col-12">
                  <a class="btn btn-outline-dark" href="#">@lang('laranja.reserve')</a>
                </div>        
                <div class="overflow-hidden">
                  <p class="font-italic text-900 fs-0 mt-3 mt-md-2 mb-lg-4" data-zanim-xs='{"delay":0.3}'>@lang('laranja.subtitle')</p>
                </div>
                <div class="overflow-hidden">
                    <h1 class="display-3 fs-5 fs-sm-6" data-zanim-xs='{"delay":0.2}'>
                      <span class="customfont font-weight-light">Laranja</span></h1>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end of .container-->
      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->



      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="bg-white py-4 py-md-8" id="default-why-us">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-8 mb-2 mb-lg-5 text-center">
              <p class="font-italic lead">@lang('laranja.description')</p>
              
            </div>
          </div>
          <div class="row align-items-center justify-content-center">
            <div class="col-12 mb-2 mb-lg-5 text-center">
              <h2 class="fs-3 fs-sm-4"><span class="customfont">@lang('laranja.feature-title')</span></h2>
            </div>
          </div>
          <div class="row align-items-center justify-content-center">
            <div class="col-sm-8 col-lg-6 mt-4 mt-lg-0 px-lg-4">
              <img class="w-100 rounded" src="/img/bungalow/laranja_front1.jpg" alt="" data-zanim-xs='{"animation":"zoom-out","delay":0.1}' data-zanim-trigger="scroll" />
            </div>
            <div class="col-sm-8 col-lg-6 text-lg-left mt-5 mt-lg-0 pl-lg-6">
              <div class="overflow-hidden">
                <ul class="font-italic lead">
                 <li data-zanim-xs='{"delay":0.2}' data-zanim-trigger="scroll">@lang('laranja.feature-1')</li>
                 <li data-zanim-xs='{"delay":0.2}' data-zanim-trigger="scroll">@lang('laranja.feature-2')</li>
                 <li data-zanim-xs='{"delay":0.4}' data-zanim-trigger="scroll">@lang('laranja.feature-3')</li>
                 <li data-zanim-xs='{"delay":0.4}' data-zanim-trigger="scroll">@lang('laranja.feature-4')</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- end of .container-->
      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section id="default-services">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-12 mb-5 mb-md-7 text-center">
              <h2 class="fs-3 fs-sm-4"><span class="customfont">@lang('laranja.relax-title')</span></h2>
            </div>
            <div class="col-lg-8 pr-lg-4 mb-4">
              <div class="media" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                <div class="overflow-hidden">
                  <img class="media-img mr-3 mr-sm-4" src="/img/icons/favorites-button.svg" alt="" data-zanim-xs='{"delay":0.2,"animation":"slide-right"}' />
                </div>
                <div class="media-body">
                  <div class="overflow-hidden">
                    <p class="mb-2 font-weight-bold" data-zanim-xs='{"delay":0.1,"animation":"slide-right"}'>@lang('laranja.relax-subtitle')</p>
                  </div>
                  <div class="overflow-hidden">
                    <p data-zanim-xs='{"delay":0.2,"animation":"slide-right"}'>@lang('laranja.relax-list')</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end of .container-->
      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="text-center pt-0 pb-4" id="default-gallery">
        <div class="container">
          <div class="row">
            <div class="col-12 mb-5 mb-lg-7">
              <h2 class="fs-3 fs-sm-4"><span class="customfont">@lang('laranja.gallery-title')</span></h2>
            </div>
            <div class="col-6 col-lg-3 pb-4">
              <a href="/img/bungalow/laranja_bed1.jpg" data-lightbox="image" data-title="your caption">
                <img class="rounded img-fluid" src="/img/bungalow/laranja_bed1.jpg" alt="" data-zanim-xs='{"animation":"zoom-in","delay":0.1}' data-zanim-trigger="scroll" />
              </a>
            </div>
            <div class="col-6 col-lg-3 pb-4">
              <a href="/img/bungalow/laranja_front2.jpg" data-lightbox="image" data-title="your caption">
                <img class="rounded img-fluid" src="/img/bungalow/laranja_front2.jpg" alt="" data-zanim-xs='{"animation":"zoom-in","delay":0.1}' data-zanim-trigger="scroll" />
              </a>
            </div>
            <div class="col-6 col-lg-3 pb-4">
              <a href="/img/bungalow/laranja_kit2.jpg" data-lightbox="image" data-title="your caption">
                <img class="rounded img-fluid" src="/img/bungalow/laranja_kit2.jpg" alt="" data-zanim-xs='{"animation":"zoom-in","delay":0.1}' data-zanim-trigger="scroll" />
              </a>
            </div>
            <div class="col-6 col-lg-3 pb-4">
              <a href="/img/bungalow/laranja_bath1.jpg" data-lightbox="image" data-title="your caption">
                <img class="rounded img-fluid" src="/img/bungalow/laranja_bath1.jpg" alt="" data-zanim-xs='{"animation":"zoom-in","delay":0.1}' data-zanim-trigger="scroll" />
              </a>
            </div>
            <div class="col-6 col-lg-3 pb-4">
              <a href="/img/bungalow/laranja_bed2.jpg" data-lightbox="image" data-title="your caption">
                <img class="rounded img-fluid" src="/img/bungalow/laranja_bed2.jpg" alt="" data-zanim-xs='{"animation":"zoom-in","delay":0.1}' data-zanim-trigger="scroll" />
              </a>
            </div>
            <div class="col-6 col-lg-3 pb-4">
              <a href="/img/bungalow/laranja_kit1.jpg" data-lightbox="image" data-title="your caption">
                <img class="rounded img-fluid" src="/img/bungalow/laranja_kit1.jpg" alt="" data-zanim-xs='{"animation":"zoom-in","delay":0.1}' data-zanim-trigger="scroll" />
              </a>
            </div>
            <div class="col-6 col-lg-3 pb-4">
              <a href="/img/bungalow/laranja_sala1.jpg" data-lightbox="image" data-title="your caption">
                <img class="rounded img-fluid" src="/img/bungalow/laranja_sala1.jpg" alt="" data-zanim-xs='{"animation":"zoom-in","delay":0.1}' data-zanim-trigger="scroll" />
              </a>
            </div>
            <div class="col-6 col-lg-3 pb-4">
              <a href="/img/bungalow/laranja_front3.jpg" data-lightbox="image" data-title="your caption">
                <img class="rounded img-fluid" src="/img/bungalow/laranja_front3.jpg" alt="" data-zanim-xs='{"animation":"zoom-in","delay":0.1}' data-zanim-trigger="scroll" />
              </a>
            </div>
            <div class="col-6 col-lg-3 pb-4">
              <a href="/img/bungalow/quinta2.jpg" data-lightbox="image" data-title="your caption">
                <img class="rounded img-fluid" src="/img/bungalow/quinta2.jpg" alt="" data-zanim-xs='{"animation":"zoom-in","delay":0.1}' data-zanim-trigger="scroll" />
              </a>
            </div>
            <div class="col-6 col-lg-3 pb-4">
              <a href="/img/bungalow/zavial1.jpg" data-lightbox="image" data-title="your caption">
                <img class="rounded img-fluid" src="/img/bungalow/zavial1.jpg" alt="" data-zanim-xs='{"animation":"zoom-in","delay":0.1}' data-zanim-trigger="scroll" />
              </a>
            </div>
            <div class="col-6 col-lg-3 pb-4">
              <a href="/img/bungalow/quinta3.jpg" data-lightbox="image" data-title="your caption">
                <img class="rounded img-fluid" src="/img/bungalow/quinta3.jpg" alt="" data-zanim-xs='{"animation":"zoom-in","delay":0.1}' data-zanim-trigger="scroll" />
              </a>
            </div>
            <div class="col-6 col-lg-3 pb-4">
              <a href="/img/bungalow/quinta4.jpg" data-lightbox="image" data-title="your caption">
                <img class="rounded img-fluid" src="/img/bungalow/quinta4.jpg" alt="" data-zanim-xs='{"animation":"zoom-in","delay":0.1}' data-zanim-trigger="scroll" />
              </a>
            </div>
          </div>
          <div class="col-12">
            <a class="btn btn-outline-dark rounded-capsule mt-4" href="#">@lang('laranja.reserve')</a>
          </div>
        </div>
        <!-- end of .container-->
      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->
@endsection