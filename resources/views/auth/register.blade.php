<div class="row col-lg-4">
		<div class="col-lg-12">
			<h3 style="color:blue;" align="center">Đăng ký</h3>
			<form class="form-vertical" role='form' method="post" action="{!! route('register')!!}">
				<div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
					<label for="username" class="control-label">Tên đăng nhập:<span style="color:red;">(*)</span></label>
					<input type="text" name="username" id="username" placeholder="Tên đăng nhập" class="form-control" value="{{ Request::old('username') ?: '' }}" />
					@if($errors->has('username'))
						<span class="help-block">{{ $errors->first('username') }}</span>
					@endif				
				</div>
				<div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
					<label for="address" class="control-label">Địa chỉ:<span style="color:red;">(*)</span></label>
					<input type="text" name="address" id="address" placeholder="Địa chỉ" class="form-control" value="{{ Request::old('address') ?: '' }}" />
					@if($errors->has('address'))
						<span class="help-block">{{ $errors->first('address') }}</span>
					@endif				
				</div>
				<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
					<label for="email" class="control-label">Email:<span style="color:red;">(*)</span></label>
					<input type="text" name="email" id="email" placeholder="Email" class="form-control" value="{{ Request::old('email') ?: '' }}" />
					@if($errors->has('email'))
						<span class="help-block">{{ $errors->first('email') }}</span>
					@endif				
				</div>
				<div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
					<label for="phone" class="control-label">Điện thoại:<span style="color:red;">(*)</span></label>
					<input type="phone" name="phone" id="phone" placeholder="Điện thoại" class="form-control"/>
					@if($errors->has('phone'))
						<span class="help-block">{{ $errors->first('phone') }}</span>
					@endif
				</div>
				<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
					<label for="password" class="control-label">Mật khẩu:<span style="color:red;">(*)</span></label>
					<input type="password" name="password" id="password" placeholder="Password" class="form-control"/>
					@if($errors->has('password'))
						<span class="help-block">{{ $errors->first('password') }}</span>
					@endif
				</div>
				<div class="form-group">
					<button class="btn btn-lg btn-primary btn-block create-shop" type="submit">Đăng ký</button> 
				</div>
				<input type="hidden" name="_token" value="{{ Session::token() }}" />
			</form>
		</div>
	</div>