<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="{{url('/css/style.css')}}">
<!------ Include the above in your HEAD tag ---------->

    <div class="container" style="margin-top:40px">
		<div class="row">
			<div class="col-sm-6 col-md-4 col-md-offset-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h1 class="text-center">Register</h1>
					</div>
					<div class="panel-body">
						<form role="form" action="#" method="POST" action="{{route('register')}}">
                {{csrf_field()}}
							<fieldset>
								<div class="row">
									<div class="center-block">
										<img class="profile-img"
											src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120" alt="">
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12 col-md-10  col-md-offset-1 ">
										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="glyphicon glyphicon-user"></i>
												</span>
												<input name="name" type="text" class="form-control {{ $errors->has('name')?'is-invalid': '' }}" placeholder="please insert your name"  value="{{old('name')}}" required>
                      </div>
                        @if($errors->has('name'))
                        <div class="invalid-feedback">
                          {{$errors->first('name')}}
                        </div>
                        @endif

										</div>
										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="glyphicon glyphicon-lock"></i>
												</span>
												<input class="form-control {{$errors->has('email')?'is-invalid': '' }}" placeholder="email" name="email" type="text" value="{{old('email')}}" required>
                      </div>
                        @if($errors->has('email'))
                        <div class="invalid-feedback">
                          {{$errors->first('email')}}
                        </div>
                        @endif

										</div>
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="glyphicon glyphicon-user"></i>
                        </span>
                        <div class="form-group">
                        <input class="form-control {{$errors->has('password')?'is-invalid': '' }}" placeholder="password" name="password" type="password"  required>
                      </div>
                        @if($errors->has('password'))
                        <div class="invalid-feedback">
                          {{$errors->first('password')}}
                        </div>
                        @endif
                    </div>
                    <br>
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="glyphicon glyphicon-lock"></i>
                        </span>
                        <input class="form-control {{$errors->has('password_confirmation')?'is-invalid': '' }}" placeholder="Password Confirmation" name="password_confirmation" type="password" value="" required>
                      </div>
                    </div>
                    @if($errors->has('password_confirmation'))
                    <div class="invalid-feedback">
                      {{$errors->first('password_confirmation')}}
                    </div>
                    @endif
										<div class="form-group">
											<input type="submit" class="btn btn-lg btn-primary btn-block" value="Register">
										</div>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
					<div class="panel-footer ">
						Don't have an account! <a href="#" onClick=""> Register </a>
					</div>
                </div>
			</div>
		</div>
	</div>
