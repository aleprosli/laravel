@extends('layouts.app')

@section('content')
@include('users.partials.header', [
        'title' => __('Hello') . ' '. auth()->user()->name,
        'description' => __('This is your Dashboard.  '),
        'class' => 'col-lg-7'
    ])
    <div class="row">
        <div class="col-xl-3 col-lg-6">
            <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0"></h5>
                            <span class="h2 font-weight-bold mb-0">Your Profile</span>
                            <a href="{{ route('profile.edit') }}" class="btn btn-sm btn-primary">ClickHere</a>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0"></h5>
                            <span class="h2 font-weight-bold mb-0">Apply Leave</span>
                            <a href="{{route('leave')}}" class="btn btn-sm btn-primary">ClickHere</a>
                        </div>


                    </div>

                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0"></h5>
                            <span class="h2 font-weight-bold mb-0">Notification</span>
                            <a href="" class="btn btn-sm btn-primary">ClickHere</a>
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </div>



        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
