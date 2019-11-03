@extends('pages.browser.layouts.browser')

@section('browser_content')
    <div class="card col-md-4 offset-md-4">
        <div class="card-body">
            <form method="POST">
                @csrf
                <div class="form-group row">
                    <div class="col-md-12">
                        <input id="email" type="email" class="form-control" placeholder="{{ __('Username') }}">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-12">
                        <input id="password" type="password" class="form-control" name="password" placeholder="{{ __('Password') }}">
                    </div>
                </div>
                <div class="form-group row mb-0">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary btn-block">
                            {{ __('Login') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
