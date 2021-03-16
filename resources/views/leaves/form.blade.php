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
    <form>
        <label class="form-control-label" for="input-reason">{{ __('Reason') }}</label>
        <textarea class="form-control" name="reason" id="input-reason" rows="3" placeholder="Why you applying this MC?" value="{{ old('name', auth()->user()->reason) }}" required autofocus></textarea>
      </form>
    <div class="input-daterange datepicker row align-items-center">
        <div class="col">
            <div class="form-group">
                <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                    </div>
                    <input class="form-control" placeholder="Start date" type="date" value="" name="date_from">
                </div>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                    </div>
                    <input class="form-control" placeholder="End date" type="date" value="" name="date_to">
                </div>
            </div>
        </div>
        <div class="fileinput fileinput-new text-center mr-5" data-provides="fileinput">
            <div class="fileinput-new thumbnail img-raised">
             <img src="..." alt="...">
            </div>
            <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
            <div>
             <span class="btn btn-raised btn-round btn-primary btn-simple btn-file">
                <span class="fileinput-new">Upload Your</span>
                <span class="fileinput-exists">MC</span>
                <input type="file" name="..." />
             </span>
                 <a href="javascript:;" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput">
                 <i class="fa fa-times"></i> Remove</a>
            </div>
         </div>
    </div>
