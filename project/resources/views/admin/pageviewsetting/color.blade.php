@extends('layouts.admin')

@section('content')

    <div class="content-area">
        <div class="mr-breadcrumb">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="heading">
                        {{ __('Product View Color Setting') }}

                        @if( $type == '1' )

                        <a class="add-btn" href="{{ route('admin-productview-home') }}">
                            <i class="fas fa-arrow-left"></i> {{ __("Back") }}
                        </a>

                        @endif

                        @if( $type == '2' )

                        <a class="add-btn" href="{{ route('admin-productview-filtered') }}">
                            <i class="fas fa-arrow-left"></i> {{ __("Back") }}
                        </a>

                        @endif

                        @if( $type == '3' )

                        <a class="add-btn" href="{{ route('admin-productview-vendor') }}">
                            <i class="fas fa-arrow-left"></i> {{ __("Back") }}
                        </a>

                        @endif
                    </h4>
                    <ul class="links">
                        <li>
                            <a href="{{ route('admin.dashboard') }}">{{ __('Dashboard') }} </a>
                        </li>
                        <li>
                            <a href="javascript:;">{{ __('Product Previiew Setting') }}</a>
                        </li>
                        <li>
                            <a href="javascript:;" onclick="location.reload();">{{ __('Product Preview Color Setting') }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="add-product-content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product-description">
                        <div class="body-area">
                            <div class="gocover" style="background: url({{asset('assets/images/'.$gs->admin_loader)}}) no-repeat scroll center center rgba(45, 45, 45, 0.5);"></div>
                            <form action="{{ route('admin-productview-color-store') }}" id="geniusform" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}

                                @include('includes.admin.form-both')

                                <input type="hidden" id="type" name="type" value="{{ $type }}">
                                <input type="hidden" id="style_id" name="style_id" value="{{ $style_id }}">

                                <div class="row justify-content-center">
                                    <div class="col-lg-3">
                                        <div class="left-area">
                                            <h4 class="heading">{{ __('Title Color') }} *</h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <div class="input-group colorpicker-component cp">
                                                <input type="text" class="input-field color-field" name="title_color" value="{{ $colorsetting && $colorsetting->title_color? $colorsetting->title_color: ''}}" class="form-control cp"/>
                                                <span class="input-group-addon"><i></i></span>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="row justify-content-center">
                                    <div class="col-lg-3">
                                        <div class="left-area">
                                            <h4 class="heading">{{ __('Tag Background Color') }} *</h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <div class="input-group colorpicker-component cp">
                                                <input type="text" class="input-field color-field" name="tag_bg_color" value="{{ $colorsetting && $colorsetting->tag_bg_color? $colorsetting->tag_bg_color: '' }}" class="form-control cp"/>
                                                <span class="input-group-addon"><i></i></span>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="row justify-content-center">
                                    <div class="col-lg-3">
                                        <div class="left-area">
                                            <h4 class="heading">{{ __('Tag Text Color') }} *</h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <div class="input-group colorpicker-component cp">
                                                <input type="text" class="input-field color-field" name="tag_color" value="{{ $colorsetting && $colorsetting->tag_color? $colorsetting->tag_color: '' }}" class="form-control cp"/>
                                                <span class="input-group-addon"><i></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row justify-content-center">
                                    <div class="col-lg-3">
                                        <div class="left-area">
                                            <h4 class="heading">{{ __('Buttons Color') }} *</h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <div class="input-group colorpicker-component cp">
                                                <input type="text" class="input-field color-field" name="buttons_color" value="{{ $colorsetting && $colorsetting->buttons_color? $colorsetting->buttons_color: '' }}" class="form-control cp"/>
                                                <span class="input-group-addon"><i></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @if($style_id == 2)
                                <div class="row justify-content-center">
                                    <div class="col-lg-3">
                                        <div class="left-area">
                                            <h4 class="heading">{{ __('Detail Text Color') }} *</h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <div class="input-group colorpicker-component cp">
                                                <input type="text" class="input-field color-field" name="detail_color" value="{{ $colorsetting && $colorsetting->detail_color? $colorsetting->detail_color: '' }}" class="form-control cp"/>
                                                <span class="input-group-addon"><i></i></span>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="row justify-content-center">
                                    <div class="col-lg-3">
                                        <div class="left-area">
                                            <h4 class="heading">{{ __('Sub Detail Text Color') }} *</h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <div class="input-group colorpicker-component cp">
                                                <input type="text" class="input-field color-field" name="sub_detail_color" value="{{ $colorsetting && $colorsetting->sub_detail_color? $colorsetting->sub_detail_color: '' }}" class="form-control cp"/>
                                                <span class="input-group-addon"><i></i></span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                @endif

                                <div class="row justify-content-center">
                                    <div class="col-lg-3">
                                        <div class="left-area">
                                            <h4 class="heading">{{ __('Price Color') }} *</h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <div class="input-group colorpicker-component cp">
                                                <input type="text" class="input-field color-field" name="price_color" value="{{ $colorsetting && $colorsetting->price_color? $colorsetting->price_color: '' }}" class="form-control cp"/>
                                                <span class="input-group-addon"><i></i></span>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="row justify-content-center">
                                    <div class="col-lg-3">
                                        <div class="left-area">

                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <button class="addProductSubmit-btn" type="submit">{{ __('Save') }}</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection