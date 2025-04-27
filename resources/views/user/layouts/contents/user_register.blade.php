<form action="{{route('userRegister')}}" method="post">
    @csrf
    <div class="form-group" id="namefield" style="display:none">
        <input type="text" class="form-control" name="user_name" placeholder="Your user name...">
        @if ($errors->has('user_name'))
        <span class="help-block font-red-mint">
            <strong>{{ $errors->first('user_name') }}</strong>
        </span>
        @endif
    </div>
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
    <div class="form-group">
        <input type="number" class="form-control" name="phone_number" id="phone_number" style="display:none" placeholder="Your phone number...">
        @if ($errors->has('phone_number'))
        <span class="help-block font-red-mint">
            <strong>{{ $errors->first('phone_number') }}</strong>
        </span>
        @endif
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="address" id="address" style="display:none" placeholder="Your address...">
        @if ($errors->has('address'))
        <span class="help-block font-red-mint">
            <strong>{{ $errors->first('address') }}</strong>
        </span>
        @endif
    </div>
    <button type="submit" id="submitBtn" class="btn btn-info">Sign in</button>
</form>
<p>
    <a href="#" id="toggleMode">Switch to Register</a>
</p>
<script>
    let isLogin = true;

    $('#toggleMode').on('click', function(e) {
        e.preventDefault();

        isLogin = !isLogin;

        if (isLogin) {
            $('#namefield').hide();
            $('#phone_number').hide();
            $('#address').hide();
            $('#header_name').text('Login');
            $('#submitBtn').text('Login');
            $('#toggleMode').text('Switch to Register');
        } else {
            $('#namefield').show();
            $('#phone_number').show();
            $('#address').show();
            $('#header_name').text('Register');
            $('#submitBtn').text('Register');
            $('#toggleMode').text('Switch to Login');
        }

        const url = isLogin ? '/userLogin' : '/userRegister';
        const formdata = $(this).serialize();

        axios.post(url, formdata).then(response => {

                console.log(response.data);
                alert('success!');
            })
            .catch(error => {
                console.log(error.response.data);
                alert("Error Occured!");
            });
    });
</script>