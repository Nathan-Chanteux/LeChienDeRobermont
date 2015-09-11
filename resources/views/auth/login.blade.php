@extends('admin')

@section('contenu')
<div class="large-9 columns">
<div class="panel-heading">Login</div>
        @if (count($errors) > 0)
                <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                                @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                @endforeach
                        </ul>
                </div>
        @endif

        <form class="form-horizontal" role="form" method="POST" action="{{ URL::asset('/auth/user') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                        <label class="label">E-Mail Address</label>
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                </div>

                <div class="form-group">
                        <label class="label">Password</label>
                                <input type="password" class="form-control" name="password">
                </div>

                <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                </div>
        </form>
</div>
@endsection
