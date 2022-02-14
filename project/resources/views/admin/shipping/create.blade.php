@extends('layouts.load')

@section('content')

    <div class="content-area">

        <div class="add-product-content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product-description">
                        <div class="body-area">
                            @include('includes.admin.form-error')
                            <form id="geniusformdata" action="{{route('admin-shipping-create')}}" method="POST"
                                  enctype="multipart/form-data">
                                {{csrf_field()}}

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="left-area">
                                            <h4 class="heading">{{ __('Title') }} *</h4>
                                            <p class="sub-heading">{{ __('(In Any Language)') }}</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <input type="text" class="input-field" name="title"
                                               placeholder="{{ __('Title') }}" required="" value="">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="left-area">
                                            <h4 class="heading">{{ __('Duration') }} *</h4>
                                            <p class="sub-heading">{{ __('(In Any Language)') }}</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <input type="text" class="input-field" name="subtitle"
                                               placeholder="{{ __('Duration') }}" required="" value="">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="left-area">
                                            <h4 class="heading">{{ __('Delivery Fee') }} *</h4>
                                            <p class="sub-heading">({{ __('In') }} {{ $sign->name }})</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <input type="number" class="input-field" name="price"
                                               placeholder="{{ __('Delivery Fee') }}" required="" value="" min="0" step="0.01">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="left-area">
                                            <h4 class="heading">{{ __('Mileage Fee') }} *</h4>
                                            <p class="sub-heading">({{ __('In') }} {{ $sign->name }})</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <input type="number" class="input-field" name="mileage_fee"
                                               placeholder="{{ __('Mileage Fee') }}" required="" value="" min="0" step="0.01">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="left-area">
                                            <h4 class="heading">{{ __('Trigger Price') }} *</h4>
                                            <p class="sub-heading">({{ __('In') }} {{ $sign->name }})</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <input type="number" class="input-field" name="triggerprice"
                                               placeholder="{{ __('Trigger Price') }}" required="" value=""
                                               min="0" step="0.01">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="left-area">
                                            <h4 class="heading">{{ __('Trigger Miles') }} *</h4>
                                            <p class="sub-heading">({{ __('free miles') }})</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <input type="number" class="input-field" name="trigger_miles"
                                               placeholder="{{ __('Trigger Miles') }}" required="" value=""
                                               min="0" step="0.01">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="left-area">

                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <button class="addProductSubmit-btn" type="submit">{{ __('Create') }}</button>
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