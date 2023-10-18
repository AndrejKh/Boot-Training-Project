<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Trainers') }}
        </h2>
    </x-slot>
</x-app-layout>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 col-sm-8 col-xs-12">
            <div class="card">
                <div class="card-header">{{ __('Add New') }}</div>

                <div class="card-body">
                    <form class="row g-3 needs-validation" method="POST" action="{{ route('trainers') }}" novalidate>
                        @csrf
                        
                        <div class="row mb-3 mt-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-8">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="" required autofocus>
                                <div class="invalid-feedback">
                                    This field is required.
                                </div>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3 ">
                            <label for="company" class="col-md-4 col-form-label text-md-end">{{ __('Company') }}</label>

                            <div class="col-md-8">
                                <input id="company" type="text" class="form-control @error('company') is-invalid @enderror" name="company" value="" required>
                                <div class="invalid-feedback">
                                    This field is required.
                                </div>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3 ">
                            <label for="mobile" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>
                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="" required>
                                <div class="invalid-feedback">
                                    Email address is required.
                                </div>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            
                        </div>
                        <div class="row mb-3 ">
                            <label for="mobile" class="col-md-4 col-form-label text-md-end">{{ __('Location') }}</label>
                            <div class="col-md-8">
                                <input id="location" type="text" class="form-control @error('location') is-invalid @enderror" name="location" value="" required>
                                <div class="invalid-feedback">
                                    This field is required.
                                </div>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            
                        </div>
                        <div class="row mb-3 ">
                            <label for="mobile" class="col-md-4 col-form-label text-md-end">{{ __('Mobile') }}</label>
                            <div class="col-md-8">
                                <input id="mobile" type="text" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="">
                                <!-- <input id="name" type="tel" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="" required> -->
                                <div class="invalid-feedback">
                                    This field is required.
                                </div>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            
                        </div>
                        <div class="row mb-3 ">
                            <label for="qualifications" class="col-md-4 col-form-label text-md-end">{{ __('Qualifications') }}</label>
                            <div class="col-md-8">
                                <input id="qualifications" type="text" class="form-control @error('qualifications') is-invalid @enderror" name="qualifications" value="">
                                <!-- <input id="qualifications" type="text" class="form-control @error('qualifications') is-invalid @enderror" name="qualifications" value="" required> -->
                                <div class="invalid-feedback">
                                    This field is required.
                                </div>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            
                        </div>
                        <div class="row mb-3 ">
                            <label for="courses" class="col-md-4 col-form-label text-md-end">{{ __('Course Offered') }}</label>
                            <div class="col-md-8">
                                <select class="form-select @error('courses') is-invalid @enderror" id="courses" name="courses" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option value="course1">Course1</option>
                                    <option value="course2">Course2</option>
                                    <option value="course3">Course3</option>
                                </select>                                <!-- <input id="name" type="tel" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="" required> -->
                                <div class="invalid-feedback">
                                    This field is required.
                                </div>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            
                        </div>
                        <div class="row mb-3 ">
                            <label for="photo" class="col-md-4 col-form-label text-md-end">{{ __('Profile Photo') }}</label>
                            <div class="col-md-8">
                                <input id="photo" type="file" class="form-control @error('photo') is-invalid @enderror" name="photo" value="">
                                <!-- <input id="qualifications" type="text" class="form-control @error('qualifications') is-invalid @enderror" name="qualifications" value="" required> -->
                                <div class="invalid-feedback">
                                    This field is required.
                                </div>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            
                        </div>
                        
                        <div class="col-12">
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button class="btn btn-primary" type="submit">Add</button>
                                <a href="/trainers" class="btn btn-secondary" role="button">Cancel</a>
                            </div>
                        </div>
                    </form>
                
                </div>
            </div>
        </div>
        

    </div>
</div>
