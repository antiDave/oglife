@extends('layouts.front')


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
                            <a href="{{ route('front.aboutus') }}">
                                About Us
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->


    <!-- Contact Us Area Start -->
    <section class="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- <div class="contact-section-title">
                        {!! $ps->contact_title !!}
                        {!! $ps->contact_text !!}
                    </div> -->
                    OG Life is proud to provide the SOCAL area with the newest cannabis strains and clones. We deliver top quality clones your door.  <br><br>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-xl-7 col-lg-7 col-md-6">
                    <div class="right-area">

                        @if($ps->site != null || $ps->email != null )
                            <div class="contact-info ">
                                <div class="left ">
                                    <div class="icon">
                                        <i class="icofont-email"></i>
                                    </div>
                                </div>
                                <div class="content d-flex align-self-center">
                                    <div class="content">
                                        @if($ps->site != null && $ps->email != null)
                                            <a href="{{$ps->site}}" target="_blank">{{$ps->site}}</a>
                                            <a href="mailto:{{$ps->email}}">{{$ps->email}}</a>
                                        @elseif($ps->site != null)
                                            <a href="{{$ps->site}}" target="_blank">{{$ps->site}}</a>
                                        @else
                                            <a href="mailto:{{$ps->email}}">{{$ps->email}}</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if($ps->street != null)
                            <div class="contact-info">
                                <div class="left">
                                    <div class="icon">
                                        <i class="icofont-google-map"></i>
                                    </div>
                                </div>
                                <div class="content d-flex align-self-center">
                                    <div class="content">
                                        <p>
                                            OG Life<br>
                                            @if($ps->street != null)
                                                {!! $ps->street !!}
                                            @endif
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endif
                         <div class="contact-info">
                                <div class="left">
                                    <div class="icon">
                                        <i class="icofont-google-map"></i>
                                    </div>
                                </div>
                                <div class="content d-flex align-self-center">
                                    <div class="content">
                                        <p>
                                            OG Life<br>
                                            1890 E 16th St <br>
                                            K107<br>
                                            Newport Beach, CA 92663
                                        </p>
                                    </div>
                                </div>
                            </div>
                        <!-- @if($ps->phone != null || $ps->fax != null )
                            <div class="contact-info">
                                <div class="left">
                                    <div class="icon">
                                        <i class="icofont-smart-phone"></i>
                                    </div>
                                </div>
                                <div class="content d-flex align-self-center">
                                    <div class="content">
                                        @if($ps->phone != null && $ps->fax != null)
                                            <a href="tel:{{$ps->phone}}">{{$ps->phone}}</a>
                                            <a href="tel:{{$ps->fax}}">{{$ps->fax}}</a>
                                        @elseif($ps->phone != null)
                                            <a href="tel:{{$ps->phone}}">{{$ps->phone}}</a>
                                        @else
                                            <a href="tel:{{$ps->fax}}">{{$ps->fax}}</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endif -->


                        <!-- <div class="social-links">
                            <h4 class="title">{{ $langg->lang53 }} :</h4>
                            <ul>

                                @if(App\Models\Socialsetting::find(1)->f_status == 1)
                                    <li>
                                        <a href="{{ App\Models\Socialsetting::find(1)->facebook }}" class="facebook"
                                        target="_blank">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                @endif

                                @if(App\Models\Socialsetting::find(1)->g_status == 1)
                                    <li>
                                        <a href="{{ App\Models\Socialsetting::find(1)->gplus }}" class="google-plus"
                                        target="_blank">
                                            <i class="fab fa-google-plus-g"></i>
                                        </a>
                                    </li>
                                @endif

                                @if(App\Models\Socialsetting::find(1)->t_status == 1)
                                    <li>
                                        <a href="{{ App\Models\Socialsetting::find(1)->twitter }}" class="twitter"
                                        target="_blank">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                @endif

                                @if(App\Models\Socialsetting::find(1)->l_status == 1)
                                    <li>
                                        <a href="{{ App\Models\Socialsetting::find(1)->linkedin }}" class="linkedin"
                                        target="_blank">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                @endif

                                @if(App\Models\Socialsetting::find(1)->d_status == 1)
                                    <li>
                                        <a href="{{ App\Models\Socialsetting::find(1)->dribble }}" class="dribbble"
                                        target="_blank">
                                            <i class="fab fa-dribbble"></i>
                                        </a>
                                    </li>
                                @endif

                            </ul>
                        </div> -->
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 col-md-6">
                    <br><br> <br><br> <br><br><b>Cannabis Clone Delivery Areas</b><br><br>
                    Los Angeles clones delivered<br>
                    Rancho Cucamonga clones delivered<br>
                    SOCAL clones delivered<br>
                    Irvine clones delivered<br>
                    San Diego Clones delivered<br>
                    San Fransisco clone delivery<br>
                    Cannabis clones of Santa Monica<br>
                    Riverside clones deliverd<br>
                    Temecula clone nursery<br>
                    Long Beach Cannabis Delivery<br>
                    Valley Marijauna Clone Delivery<br>
                    Hollywood Clones<br>
                    Cali Clones<br>
                    California Clone Delivery Services
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Us Area End-->

@endsection