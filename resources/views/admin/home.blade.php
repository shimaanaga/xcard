
@extends('admin.layout.index')

@section('content')

<div class="row">

    <div class="col-md-12 col-xl-4">
        <!-- table card start -->
        <div class="card table-card">
            <div class="">
                <div class="row-table">
                    <div class="col-sm-6 card-block-big br">
                        <div class="row">
                            <div class="col-sm-4">
                                <a href="{{aUrl('blog')}}"><i class="icofont icofont-edit text-success"></i> </a>
                            </div>
                            <div class="col-sm-8 text-center">
                                <h5>{{$blogs}}</h5>
                                <a href="{{aUrl('blog')}}" style="color: black;"><span>{{_i('Blogs')}}</span> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 card-block-big">
                        <div class="row">
                            <div class="col-sm-4">
                                <a href="{{aUrl('content_management')}}"><i class="icofont icofont-file-text text-danger"></i></a>
                            </div>
                            <div class="col-sm-8 text-center">
                                <h5>{{$content_sections}}</h5>
                                <a href="{{aUrl('content_management')}}"  style="color: black;"> <span>{{_i('Content')}}</span> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="row-table">
                    <div class="col-sm-6 card-block-big br">
                        <div class="row">
                            <div class="col-sm-4">
                                <a href="{{aUrl('newsLetter')}}"> <i class="icofont icofont-email text-info"></i> </a>
                            </div>
                            <div class="col-sm-8 text-center">
                                <h5>{{$newsletter}}</h5>
                                <a href="{{aUrl('newsLetter')}}" style="color: black;"> <span>{{_i('NewsLetters')}}</span> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 card-block-big">
                        <div class="row">
                            <div class="col-sm-4">
                                <a href="{{url('/admin/admin/all/admin/all')}}"> <i class="icofont icofont-ui-user text-warning"></i> </a>
                            </div>
                            <div class="col-sm-8 text-center">
                                <h5> {{$admins}}</h5>
                                <a href="{{url('/admin/admin/all')}}"  style="color: black;"><span>{{_i('Admins')}}</span> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- table card end -->
    </div>

    <div class="col-md-12 col-xl-4">
        <!-- widget primary card start -->
        <div class="card table-card widget-primary-card">
            <div class="">
                <div class="row-table">
                    <div class="col-sm-3 card-block-big">
                        <a href="{{aUrl('categories')}}" style="color: white;"> <i class="icofont icofont-justify-all"></i> </a>
                    </div>
                    <div class="col-sm-9">
                        <h4>{{$product_cats}}</h4>
                        <a href="{{aUrl('categories')}}" style="color: white;"> <h6>{{_i('Product Category')}}</h6></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- widget primary card end -->
        <!-- widget-success-card start -->
        <div class="card table-card widget-success-card">
            <div class="">
                <div class="row-table">
                    <div class="col-sm-3 card-block-big">
                        <a href="{{aUrl('products')}}"  style="color: white;"> <i class="icofont icofont-trophy-alt"></i></a>
                    </div>
                    <div class="col-sm-9">
                        <h4>{{$products}}</h4>
                        <a href="{{aUrl('products')}}"  style="color: white;"> <h6>{{_i('Products')}}</h6> </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- widget-success-card end -->
    </div>

    <div class="col-md-12 col-xl-4">
        <!-- widget primary card start -->
        <div class="card table-card widget-primary-card">
            <div class="">
                <div class="row-table">
                    <div class="col-sm-3 card-block-big">
                        <i class="icofont icofont-star"></i>
                    </div>
                    <div class="col-sm-9">
                        <h4>{{$ratings}}</h4>
                        <h6>{{_i('Ratings')}} </h6>
                    </div>
                </div>
            </div>
        </div>
        <!-- widget primary card end -->
        <!-- widget-success-card start -->
        <div class="card table-card widget-success-card">
            <div class="">
                <div class="row-table">
                    <div class="col-sm-3 card-block-big">
                        <a href="{{aUrl('orders')}}"  style="color: white;"> <i class="icofont icofont-cart"></i></a>
                    </div>
                    <div class="col-sm-9">
                        <h4>{{$orders}}</h4>
                        <a href="{{aUrl('orders')}}"  style="color: white;"> <h6>{{_i('Orders')}}</h6> </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- widget-success-card end -->
    </div>

</div>


<div class="col-md-12 col-xl-4">
    <!-- widget primary card start -->
    <div class="card table-card widget-primary-card">
        <div class="">
            <div class="row-table">
                <div class="col-sm-3 card-block-big">
                    <a href="{{aUrl('banks')}}" style="color: white;"> <i class="icofont icofont-money"></i> </a>
                </div>
                <div class="col-sm-9">
                    <h4>{{$banks}}</h4>
                    <a href="{{aUrl('banks')}}" style="color: white;"> <h6>{{_i('Bank Transfer')}}</h6> </a>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
