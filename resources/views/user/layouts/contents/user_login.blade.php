<form action="{{route('userRegister')}}" method="post">
  @csrf

  <div class="form-group">
    <input type="email" class="form-control" name="email" placeholder="Your email address...">
    @if ($errors->has('email'))
    <span class="help-block font-red-mint">
      <strong>{{ $errors->first('email') }}</strong>
    </span>
    @endif
  </div>
  <div class="form-group">
    <input type="password" class="form-control" name="password" placeholder="Your password...">
    @if ($errors->has('password'))
    <span class="help-block font-red-mint">
      <strong>{{ $errors->first('password') }}</strong>
    </span>
    @endif
  </div>

  <button type="submit" class="btn btn-info">Login</button>
</form>