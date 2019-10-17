@extends('layouts.individualuser-app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('KYC Form') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('individual_user.kyc') }}" enctype="multipart/form-data">
                            @csrf

                            <h1>Family Information</h1>
                            <div class="form-group row">
                                <label for="father_name" class="col-md-4 col-form-label text-md-right">{{ __('Father Name') }}</label>

                                <div class="col-md-6">
                                    <input id="father_name" type="text" class="form-control @error('father_name') is-invalid @enderror" name="father_name" required autocomplete="father_name" autofocus>

                                    @error('father_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Mother Name') }}</label>

                                <div class="col-md-6">
                                    <input id="mother_name" type="text" class="form-control @error('mother_name') is-invalid @enderror" name="mother_name" required autocomplete="mother_name" autofocus>

                                    @error('mother_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="grandfather_name" class="col-md-4 col-form-label text-md-right">{{ __('Grand Father Name') }}</label>

                                <div class="col-md-6">
                                    <input id="grandfather_name" type="text" class="form-control @error('grandfather_name') is-invalid @enderror" name="grandfather_name" required autocomplete="father_name" autofocus>

                                    @error('grandfather_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="spouse_name" class="col-md-4 col-form-label text-md-right">{{ __('Spouse Name (Optional)') }}</label>

                                <div class="col-md-6">
                                    <input id="spouse_name" type="text" class="form-control @error('spouse_name') is-invalid @enderror" name="spouse_name" autofocus>

                                    @error('spouse_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                        <h1>Permanent Address</h1>
                            <div class="form-group row">
                                <label for="district" class="col-md-4 col-form-label text-md-right">{{ __('District') }}</label>

                                <div class="col-md-6">
                                    <input id="district" type="text" class="form-control @error('district') is-invalid @enderror" name="district" required autocomplete="district" autofocus>

                                    @error('district')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="vdc" class="col-md-4 col-form-label text-md-right">{{ __('Vdc/Municipality') }}</label>

                                <div class="col-md-6">
                                    <input id="vdc" type="text" class="form-control @error('vdc') is-invalid @enderror" name="vdc" required autocomplete="vdc" autofocus>

                                    @error('vdc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="ward" class="col-md-4 col-form-label text-md-right">{{ __('Ward No.') }}</label>

                                <div class="col-md-6">
                                    <input id="ward" type="number" maxlength="2" class="form-control @error('ward') is-invalid @enderror" name="ward" required autocomplete="ward" autofocus>

                                    @error('ward')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                         <h1>Personal Information</h1>
                            <div class="form-group row">
                                <label for="dob" class="col-md-4 col-form-label text-md-right">{{ __('Date of Birth') }}</label>

                                <div class="col-md-6">
                                    <input id="dob" type="date" class="form-control @error('dob') is-invalid @enderror" name="dob" required autocomplete="dob" autofocus>

                                    @error('dob')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>

                                <div class="col-md-6">
                                    <select id="gender" class="form-control @error('gender') is-invalid @enderror" name="gender" required autocomplete="gender" autofocus>
                                        <option value="" disabled selected>Select Gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="other">Other</option>
                                    </select>
                                    @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="occupation" class="col-md-4 col-form-label text-md-right">{{ __('Occupation') }}</label>

                                <div class="col-md-6">
                                    <input id="occupation" type="text" class="form-control @error('occupation') is-invalid @enderror" name="occupation" required autocomplete="occupation" autofocus>

                                    @error('occupation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                         <h1>Identity Information</h1>
                            <div class="form-group row">
                                <label for="identity_type" class="col-md-4 col-form-label text-md-right">{{ __('Identity type') }}</label>

                                <div class="col-md-6">
                                    <select id="identity_type" class="form-control @error('identity_type') is-invalid @enderror" name="identity_type" required autocomplete="identity_type" autofocus>
                                        <option value="" disabled selected>Select the type of Identification</option>
                                        <option value="citizenship">Citizenship</option>
                                        <option value="driving_license">Driving License</option>
                                        <option value="voters_card">Voters Card</option>
                                    </select>

                                    @error('identity_type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="identity_number" class="col-md-4 col-form-label text-md-right">{{ __('Identity number') }}</label>

                                <div class="col-md-6">
                                    <input id="identity_number" type="number" class="form-control @error('identity_number') is-invalid @enderror" name="identity_number" required autocomplete="identity_number" autofocus>

                                    @error('identity_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="issued_form" class="col-md-4 col-form-label text-md-right">{{ __('Issued From') }}</label>

                                <div class="col-md-6">
                                    <input id="issued_form" type="text" class="form-control @error('issued_form') is-invalid @enderror" name="issued_form" placeholder="Issued Loaction" required autocomplete="issued_form" autofocus>

                                    @error('issued_form')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="issued_date" class="col-md-4 col-form-label text-md-right">{{ __('Issued Date') }}</label>

                                <div class="col-md-6">
                                    <input id="issued_date" type="date" class="form-control @error('issued_date') is-invalid @enderror" name="issued_date" required autocomplete="issued_date" autofocus>

                                    @error('issued_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                         <h3>Upload photo of the identification document</h3>
                            <div class="form-group row">
                                <label for="front" class="col-md-4 col-form-label text-md-right" >{{ __('Frontside') }}</label>

                                <div class="col-md-6">
                                    <input class="py-2" id="front" type="file" class="form-control @error('front') is-invalid @enderror" name="front" required autocomplete="front" autofocus>

                                    @error('front')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="back" class="col-md-4 col-form-label text-md-right">{{ __('Backside') }}</label>
                                <div class="col-md-6">
                                    <input class="py-2" id="back" type="file" class="form-control @error('back') is-invalid @enderror" name="back" required autocomplete="back" autofocus>

                                    @error('back')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="pp_photo" class="col-md-4 col-form-label text-md-right">{{ __('Passport size photo') }}</label>

                                <div class="col-md-6">
                                    <input class="py-2" id="pp_photo" type="file" class="form-control @error('pp_photo') is-invalid @enderror" name="pp_photo" required autocomplete="pp_photo" autofocus>

                                    @error('pp_photo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <input id="individual_user_id" type="hidden" class="form-control @error('individual_user_id') is-invalid @enderror" name="individual_user_id" value="{{ Auth::guard('individual_user')->user()->id }}" autofocus readonly>

                                    @error('individual_user_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Submit') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
