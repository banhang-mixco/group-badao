<div class="row col-lg-4">
		<div class="col-lg-12">
			<h3 style="color:blue;" align="center">Đăng nhập</h3>
			<form class="form-vertical" role='form' method="post" action="{!! route('login')!!}" >
				<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
					<label for="email" class="control-label">Email:<span style="color:red;">(*)</span></label>
					<input type="text" name="email" id="email" placeholder="Email" class="form-control" value="{{ Request::old('email') ?: '' }}" />
					@if($errors->has('email'))
						<span class="help-block">{{ $errors->first('email') }}</span>
					@endif				
				</div>
				<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
					<label for="password" class="control-label">Mật khẩu:<span style="color:red;">(*)</span></label>
					<input type="password" name="password" id="password" placeholder="Password" class="form-control"/>
					@if($errors->has('password'))
						<span class="help-block">{{ $errors->first('password') }}</span>
					@endif
				</div>
				<div class="checkbox">
					<label><input type="checkbox" name="remember">Ghi nhớ tôi</label>
				</div>
				<div class="form-group">
					<button class="btn btn-lg btn-primary btn-block create-shop" type="submit">Đăng nhập</button> 
				</div>
				<input type="hidden" name="_token" value="{{ Session::token() }}" />
			</form>
			<div class="col-lg-12 form-group" align="center" style="color: #e98b39; font-size:14px;"> Hoặc đăng nhập bằng </div>
			<div align="center" class="form-group col-lg-12">
				<a href="{!! route('google') !!}"><img src="{{ url('public/images/google.jpg') }}"></a>
				<a href="{!! route('facebook') !!}"><img src="{{ url('public/images/face.jpg') }}"></a>
			</div>
		</div>
	</div>