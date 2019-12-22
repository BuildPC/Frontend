{{--<form action="/actions/changePassword" method="POST">--}}
{{--    Old Password:<input type="password" name="oldPass" placeholder="Enter your old password"><br>--}}
{{--    New password: <input type="password" name="newPass1" placeholder="Enter your new password"><br>--}}
{{--    Confirm your new password: <input type="password" name="newPass2" placeholder="Enter your new password"><br>--}}
{{--    <input type="submit" value="Submit">--}}
{{--</form>--}}

<div class="container">
    <div class="d-flex">
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form class="form-horizontal" method="POST" action="{{ route('changePassword') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('current-password') ? ' has-error' : '' }}">
                <label for="new-password" class="col-md-4 control-label">Current Password</label>

                <input id="current-password" type="password" class="form-control" name="current-password" required>

                @if ($errors->has('current-password'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('current-password') }}</strong>
                                    </span>
                @endif
            </div>

            <div class="form-group{{ $errors->has('new-password') ? ' has-error' : '' }}">
                <label for="new-password" class="col-md-4 control-label">New Password</label>

                <input id="new-password" type="password" class="form-control" name="new-password" required>

                @if ($errors->has('new-password'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('new-password') }}</strong>
                                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="new-password-confirm" class="col-md-4 control-label">Confirm New Password</label>

                <input id="new-password-confirm" type="password" class="form-control" name="new-password_confirmation"
                       required>
            </div>


            <div class="form-group">
                <div class="col-md-3">
                    <button type="submit" class="btn btn-primary">
                        Change Password
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
