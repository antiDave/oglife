@extends('layouts.front')

@section('styles')
<style>
    .xzoom5 {
        height:240px;
        object-fit:cover;
    }

    .xzoom5 {
        width: 100%;
    }

    .xzoom-gallery5 {
        height:60px;
        object-fit:cover;
    }

    .order-tracking-content .track-form {
        margin-top: 0;
    }

    .read-more-btn {
        font-size: 12px;
        text-transform: uppercase;
        font-weight: 400;
        color: #fff;
        background: #84a45a;
        padding: 7px 20px;
        border: 1px solid #84a45a;
        border-radius: 50px;
        -webkit-transition: 0.3s ease-in;
        -moz-transition: 0.3s ease-in;
        -o-transition: 0.3s ease-in;
        transition: 0.3s ease-in;
    }

    a.strain-action {
        font-weight: 700;
        font-size: 12px;
        padding: 5px;
        color: green;
        background-color: aliceblue;
        margin-left: 5px;
    }

    a.strain-action:hover {
        background: none;
        color: #84a45a;
    }

    .read-more-btn:hover {
        background: none;
        color: #84a45a;
    }

    .action-area {
        margin: 20px 0;
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
                                Strains
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    <!-- Blog Page Area Start -->
    <section class="product-details-page">
        <div class="container">
            <div class="order-tracking-content">
                    @if(!Auth::guard('web')->check())
                        <a class="mybtn1" href="{{ route('user.login') }}">Add New Strain</a>
                    @else
                        <a class="mybtn1" href="{{route('front.strainadd')}}">Add New Strain</a>
                    @endif
            </div>

            <br>
            
            <table id="straintable" class="table table-hover dt-responsive" cellspacing="0"
                                   width="100%">
                <thead>
                    <tr>
                        <th>{{ __("Name") }}</th>
                        <th>{{ __("EFFECT") }}</th>
                        <th>{{ __("PARENT") }}</th>
                        <th>{{ __("ACTION") }}</th>
                    </tr>
                </thead>
            </table>
            <br>
            <br>
            <br>
            <br>

        </div>
    </section>
    <!-- Blog Page Area Start -->




@endsection


@section('scripts')

    <script type="text/javascript">


        // Pagination Starts

        $(document).on('click', '.pagination li', function (event) {
            event.preventDefault();
            if ($(this).find('a').attr('href') != '#' && $(this).find('a').attr('href')) {
                $('#preloader').show();
                $('#ajaxContent').load($(this).find('a').attr('href'), function (response, status, xhr) {
                    if (status == "success") {
                        $("html,body").animate({
                            scrollTop: 0
                        }, 1);
                        $('#preloader').fadeOut();
                    }

                });
            }
        });

        $("#search").on('change', function() {
            $("#search-form").submit();
        })

        $(document).on('click', ".img-link-item", function() {
            var href=$(this).data('href');
            var attach_obj = $(this).parents('.xzoom-container').find('.xzoom5');
            console.log(href);
            $(attach_obj).attr('src', href);
        })


        var table = $('#straintable').DataTable({
                ordering: false,
                processing: true,
                serverSide: true,
                retrieve: true,
                lengthMenu: [ 50, 100, 150 ,200 ],
                ajax: '{{ route('front.straindatatable') }}',
                columns: [
                    {data: 'name', name: 'name'},
                    {data: 'effect', name: 'effect'},
                    {data: 'parent', name: 'parent'},
                    {data: 'action', name: 'action'},
                ],
                language: {
                    processing: '<img src="{{asset('assets/images/'.$gs->admin_loader)}}">'
                },
                drawCallback: function (settings) {
                    $('.select').niceSelect();
                }
            });
        // Pagination Ends

    </script>


@endsection