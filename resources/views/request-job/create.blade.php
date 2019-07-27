@extends('layouts.app') @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">بطاقة تقدم طلب </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('requast-job.store') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus> @error('name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('agree') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="text" class="form-control @error('agree') is-invalid @enderror" name="agree" value="{{ old('agree') }}" required autocomplete="email"> @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('phone') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" required > @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="nationality" class="col-md-4 col-form-label text-md-right">{{ __('nationality') }}</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="text" class="form-control" name="expected_salary" required >
                                    </div>
                                </div>
                                 <div class="form-group row">
                                    <label for="expected_salary" class="col-md-4 col-form-label text-md-right">{{ __('expected_salary') }}</label>

                                    <div class="col-md-6">
                                        <input  type="text" class="form-control" name="expected_salary" required >
                                    </div>
                                </div>

                                                                  <div class="form-group row">
                                    <label for="note" class="col-md-4 col-form-label text-md-right">{{ __('note') }}</label>

                                    <div class="col-md-6">
                                        <textarea  class="form-control @error('note') is-invalid @enderror" name="note" id="" cols="30" rows="10"></textarea> @error('note')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> @enderror
                                    </div>
                                 </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('certificates') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control @error('certificates') is-invalid @enderror" name="certificates" value="{{ old('certificates') }}" required > @error('certificates')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="governorate" class="col-md-4 col-form-label text-md-right">{{ __('governorate') }}</label>

                                    <div class="col-md-6">
                                        <input id="governorate" type="text" class="form-control" name="governorate" >
                                    </div>
                                </div> 
                                <div class="form-group row">
                                    <label for="area" class="col-md-4 col-form-label text-md-right">{{ __('area') }}</label>

                                    <div class="col-md-6">
                                        <input id="area" type="text" class="form-control @error('area') is-invalid @enderror" name="area" value="{{ old('area') }}" required > @error('area')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="experience" class="col-md-4 col-form-label text-md-right">{{ __('experience') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="text" class="form-control @error('experience') is-invalid @enderror" name="experience" required > @error('experience')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> @enderror
                                    </div>
                                </div>




                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            قدم الطلب
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection