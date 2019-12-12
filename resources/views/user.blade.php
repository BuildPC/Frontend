@extends("layouts.app")
@section('content')
    <div class="container pt-5">
        <div class="d-flex">
            <h1 class="pr-2" style="color:#249aff">Username :</h1>
            <h1>  {{Auth::user()->name}}</h1>
        </div>
        <div class="d-flex">
            <h1 class="pr-2" style="color:#249aff">Email :</h1>
            <h1>  {{Auth::user()->email}}</h1>
        </div>

        <div class="d-flex">
            <h1 class="pr-1" style="color:#ff631a">Account created at: </h1>
            <h1>  {{Auth::user()->created_at}}</h1>
        </div>

        <div class="d-flex">
            <h1 class="pr-1" style="color:#ff631a">Account last updated at: </h1>
            <h1>  {{Auth::user()->updated_at}}</h1>
        </div>
        <h1> <h1>
                <button type="button" class="btn btn-dark">Change Password</button>
                <button type="button" class="btn btn-dark">Change Email</button>
    </div>




@endsection
