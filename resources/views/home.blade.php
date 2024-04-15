@extends('main')

@section('content')
    <!-- Slider -->



    <!-- Banner -->
    <div class="sec-banner bg0 p-t-80 p-b-50">
        <div class="container">
            <div class="row">
                @foreach($menus as $menu)
                    <div class="col-md-6 col-xl-2 p-b-30 m-lr-auto">
                        <!-- Block1 -->
                            <!-- <div style="text-align: center;" class="block1 wrap-pic-w">
                                <a href="/danh-muc/{{ $menu->id }}-{{ \Str::slug($menu->name, '-') }}.html" class="block1-link">
                                    <div class="block1-txt">
                                        <h3 class="block1-name">
                                            {{ $menu->name }}
                                        </h3>
                                    </div>
                                </a>
                            </div> -->

                    </div>
                @endforeach
            </div>
        </div>
    </div>


    <!-- Product -->
    <section class="bg0 p-t-23 p-b-140">
        <div class="container">
            <div class="p-b-10">
                <h3 class="ltext-103 cl5">
                   ALL Product
                </h3>
            </div>

            <!-- <div class="flex-w flex-sb-m p-b-52">
                <div class="flex-w flex-l-m filter-tope-group m-tb-10">
                    <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
                        All Products
                    </button>
                </div>
            </div> -->

            <div id="loadProduct">
                @include('products.list')
            </div>


            <!-- Load more -->
            <div class="flex-c-m flex-w w-full p-t-45" id="button-loadMore">
                <input type="hidden" value="1" id="page">
                <a onclick="loadMore()" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
                    Load More
                </a>
            </div>
        </div>
    </section>
@endsection
