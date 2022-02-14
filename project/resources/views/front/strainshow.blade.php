@extends('layouts.front')

@section('styles')
<style>
    #gallery_area {
        margin: 10px 0;
    }

    .img-wrapper {
        width:24%;
        height: auto;
        margin:5px;
        padding:0;
    }

    .img-item {
        width: 100%;
        height: 250px;
        object-fit: cover;
    }
</style>
@endsection

@section('content')
    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="pages">
                        <li>
                            <a href="{{ route('front.index') }}">
                                {{ $langg->lang17 }}
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('front.strain') }}">
                                Strain
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('front.strainshow',$strain->id) }}">
                                Strain Show
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    <section class="user-dashbord">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="xzoom-container">
                        <img class="xzoom5" src="{{ $strain->main_thumb()? asset($strain->main_thumb()->path):asset('assets/images/noimage.png') }}"/>
                        <div class="xzoom-thumbs">
                            <div class="strain-slider">
                                @forelse($strain->galleries as $gal)
                                    <a href="javascript:void(0)" data-href="{{asset($gal->path)}}" class="img-link-item">
                                        <img class="xzoom-gallery5" width="80" src="{{asset($gal->path)}}">
                                    </a>
                                @empty
                                    <a href="javascript:void(0)" data-href="{{asset('assets/images/noimage.png')}}" class="img-link-item">
                                        <img class="xzoom-gallery5" width="80" src="{{asset('assets/images/noimage.png')}}">
                                    </a>
                                @endforelse
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
                <div class="col-md-8">
                    <div class="right-area">
                        <div class="product-info">
                            <h4 class="product-name">{{ $strain->name }}</h4>
                            <p><strong>Effect:</strong> {{ $strain->effect }}</p>
                            <p><strong>Description:</strong> {{ $strain->description }}</p>
                            <p><strong>Parent:</strong> {{ $strain->parent }}</p>
                        </div>
                    </div>
                </div>

                    <!-- <div class="user-profile-details">
                        <div class="account-info">
                            <div class="header-area header-area d-flex align-items-center justify-content-between">
                                <h4 class="title">
                                    Edit Strain
                                </h4>
                                <div class="button-area d-flex align-items-center justify-content-between">
                                    <button class="mybtn1 ml-3" id="upload_btn" style="margin-right: 10px;" type="button" onclick="$('#upload_gallery').focus().trigger('click');">Upload Image</button>
                                    <button class="mybtn1 ml-3" id="clear_btn" type="button" disabled onclick="clear_image();">Clear Image</button>
                                </div>
                            </div>
                            <div class="edit-info-area">
                                <div class="body">
                                    <div class="edit-info-area-form">
                                        <div class="gocover" style="background: url({{ asset('assets/images/'.$gs->loader) }}) no-repeat scroll center center rgba(45, 45, 45, 0.5);">
                                        </div>
                                        <form id="strainform" action="{{route('front.strainsave')}}" method="POST" enctype="multipart/form-data">

                                            {{ csrf_field() }}

                                            @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <button type="button" class="close alert-close"><span>×</span></button>
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif

                                            <input type="hidden" id="strain_id" name="strain_id" value="{{ $strain->id }}">

                                            <input type="file" id="upload_gallery" name="gallery[]" style="display:none" onchange="upload_change(this);" size="2000000" multiple>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div id="gallery_area" class="d-flex align-items-center" style="flex-wrap: wrap;"></div>
                                                </div>
                                            </div>
                                            
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <h6>Name</h6>
                                                        <input name="name" type="text" class="form-control" placeholder="Name" required="" value="{{ $strain->name }}">
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <h6>Effect</h6>
                                                        <textarea class="form-control" name="effect" rows="4" required="" placeholder="Effect">{{ $strain->effect }}</textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <h6>Description</h6>
                                                        <textarea class="form-control" name="description" rows="4" required="" placeholder="Description">{{ $strain->description }}</textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <h6>Parent</h6>
                                                        <textarea class="form-control" name="parent" rows="4" required="" placeholder="Parent">{{ $strain->effect }}</textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-links">
                                                <button class="submit-btn" type="submit">{{ $langg->lang271 }}</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
            </div>
        </div>
    </section>
@endsection

@section('scripts')
<script>

    var $product_slider = $('.strain-slider');
    $product_slider.owlCarousel({
        loop: true,
        dots: false,
        nav: false,
        margin: 0,
        autoplay: true,
        items: 4,
        autoplayTimeout: 6000,
        smartSpeed: 1000,
        responsive: {
            0: {
                items: 4
            },
            768: {
                items: 4
            }
        }
    });

</script>
@endsection

