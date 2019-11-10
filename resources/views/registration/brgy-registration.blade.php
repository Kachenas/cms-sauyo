<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Register</div>

                <div class="card-body">
                    <form>
                        @csrf

                        <div class="row">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="isUserConstituent">
                                <label class="custom-control-label" for="isUserConstituent">Public Official</label>
                            </div>
                        </div>

                        <div class="user-cons">
                            <div class="form-group row">
                                <label for="username" class="col-md-4 col-form-label text-md-right">Username</label>

                                <div class="col-md-6">
                                    <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" required autofocus>

                                    @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="txtemail" type="email" class="form-control @error('email') is-invalid @enderror" name="txtemail" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="position" class="col-md-4 col-form-label text-md-right">Position</label>

                                <div class="col-md-6">
                                    <input id="txtposition" type="text" class="form-control @error('position') is-invalid @enderror" name="txtposition" required autofocus>

                                    @error('txtposition')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                        </div>

                        <div class="form-group row">
                            <label for="firstName" class="col-md-4 col-form-label text-md-right">First Name</label>

                            <div class="col-md-6">
                                <input id="txtfirstName" type="text" class="form-control @error('txtfirstName') is-invalid @enderror" name="txtfirstName" required autofocus>

                                @error('txtfirstName')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="middleName" class="col-md-4 col-form-label text-md-right">Middle Name</label>

                            <div class="col-md-6">
                                <input id="txtmiddleName" type="text" class="form-control @error('txtmiddleName') is-invalid @enderror" name="txtmiddleName" required autofocus>

                                @error('txtmiddleName')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lastName" class="col-md-4 col-form-label text-md-right">Last Name</label>

                            <div class="col-md-6">
                                <input id="txtlastName" type="text" class="form-control @error('txtlastName') is-invalid @enderror" name="txtlastName" required autofocus>

                                @error('txtlastName')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">Gender</label>

                            <div class="col-md-6">
                                <input id="txtgender" type="text" class="form-control @error('txtgender') is-invalid @enderror" name="txtgender" required autofocus>

                                @error('txtgender')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="birthdate" class="col-md-4 col-form-label text-md-right">Birthdate</label>

                            <div class="col-md-6">
                                <input id="txtbirthdate" type="date" class="form-control @error('txtbirthdate') is-invalid @enderror" name="txtbirthdate" required autofocus>

                                @error('txtbirthdate')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tempAddress" class="col-md-4 col-form-label text-md-right">Temporary Address</label>

                            <div class="col-md-6">
                                <input id="txttempAddress" type="text" class="form-control @error('txttempAddress') is-invalid @enderror" name="txttempAddress" required autofocus>

                                @error('txttempAddress')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="permAddress" class="col-md-4 col-form-label text-md-right">Permanent Address</label>

                            <div class="col-md-6">
                                <input id="txtpermAddress" type="text" class="form-control @error('txtpermAddress') is-invalid @enderror" name="txtpermAddress" required autofocus>

                                @error('txtpermAddress')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="occupation" class="col-md-4 col-form-label text-md-right">Occupation</label>

                            <div class="col-md-6">
                                <input id="txtoccupation" type="text" class="form-control @error('txtoccupation') is-invalid @enderror" name="txtoccupation" required autofocus>

                                @error('txtoccupation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <input type="button" class="btn btn-primary" onclick="registerConstituents()" value="Submit">
                            </div>
                        </div>
                    </form>
                </div> 
            </div>
        </div>
    </div>
</div>