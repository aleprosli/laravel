@extends('layouts.app', ['title' => __('User Profile')])

@section('content')
    @include('users.partials.header', [
        'title' => __('Hello') . ' '. auth()->user()->name,
        'description' => __('Get Well Soon! Apply Medical Leave now.'),
        'class' => 'col-lg-7'
    ])

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
                <div class="card card-profile shadow">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 order-lg-2">
                            <div class="card-profile-image">
                                <a href="#">
                                    <img src="{{ asset('argon') }}/img/theme/team-4-800x800.jpg" class="rounded-circle">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">

                    </div>

                </div>
            </div>
            <div class="col-xl-8 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <h3 class="col-12 mb-0">{{ __('Edit Profile') }}</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('addUser.store') }}" autocomplete="off">
                            @csrf
                            @method('put')

                            <h6 class="heading-small text-muted mb-4">{{ __('User information') }}</h6>

                            @if (session('status'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('status') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif

                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Name') }}</label>
                                    <input type="text" name="name" id="input-name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('name', auth()->user()->name) }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                  <div class="form-group{{ $errors->has('gender') ? ' has-danger' : '' }}"">
                                    <label for="gender">Gender </label>
                                    <select class="form-control" id="gender" name="gender">
                                      <option value="Male">Male</option>
                                      <option value="Female">Female</option>
                                    </select>
                                    @if ($errors->has('gender'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
                                  </div>
                                  <div class="form-group{{ $errors->has('ic') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-ic">{{ __('Identification Number') }}</label>
                                    <input type="number" name="ic" id="input-ic" class="form-control form-control-alternative{{ $errors->has('ic') ? ' is-invalid' : '' }}" placeholder="{{ __('Identification Number') }}" value="{{ old('ic', auth()->user()->ic) }}" required>

                                    @if ($errors->has('ic'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('ic') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('address') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-address">{{ __('Address') }}</label>
                                    <input type="text" name="address" id="input-address" class="form-control form-control-alternative{{ $errors->has('address') ? ' is-invalid' : '' }}" placeholder="{{ __('Address') }}" value="{{ old('address', auth()->user()->address) }}" required>

                                    @if ($errors->has('address'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('address') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                  <div class="form-group{{ $errors->has('mnum') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-mnum">{{ __('Mobile Number') }}</label>
                                    <input type="number" name="mnum" id="input-mnum" class="form-control form-control-alternative{{ $errors->has('mnum') ? ' is-invalid' : '' }}" placeholder="{{ __('Mobile Number') }}" value="{{ old('mnum', auth()->user()->mnum) }}" required>

                                    @if ($errors->has('mnum'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('mnum') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-email">{{ __('Email') }}</label>
                                    <input type="email" name="email" id="input-email" class="form-control form-control-alternative{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" value="{{ old('email', auth()->user()->email) }}" required>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('bank') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-bank">{{ __('Bank') }}</label>
                                    <input type="text" name="bank" id="input-bank" class="form-control form-control-alternative{{ $errors->has('bank') ? ' is-invalid' : '' }}" placeholder="{{ __('Bank') }}" value="{{ old('bank', auth()->user()->bank) }}" required>

                                    @if ($errors->has('bank'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('bank') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('bankacc') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-bankacc">{{ __('Bank Account') }}</label>
                                    <input type="number" name="bankacc" id="input-bankacc" class="form-control form-control-alternative{{ $errors->has('bankacc') ? ' is-invalid' : '' }}" placeholder="{{ __('Bank Account') }}" value="{{ old('bankacc', auth()->user()->bankacc) }}" required >

                                    @if ($errors->has('bankacc'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('bankacc') }}</strong>
                                        </span>
                                    @endif
                                </div>


                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Save') }}</button>
                                </div>
                            </div>
                        </form>

        @include('layouts.footers.auth')
        <script src="/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    </div>
@endsection
