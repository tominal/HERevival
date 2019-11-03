@extends('layouts.app', ['page_name' => 'Browser'])

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card mb-5">
                <div class="card-body">
                    <form method="post" action="/internet/ip">
                        @csrf
                        <input class="form-control" name="ip" placeholder="{{ session('browser_session') }}">
                    </form>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header">
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->route()->getName() !== "get.browser.index" ?: 'active' }}" href="{{ route('get.browser.index') }}"><i class="fad fa-home-lg"></i> Index</a>
                        </li>
                        <li class="nav-item border rounded ml-2">
                            <a class="nav-link {{ request()->route()->getName() !== "get.browser.login" ?: 'active' }}" href="{{ route('get.browser.login') }}"><i class="fad fa-sign-in"></i> Login</a>
                        </li>
                        <li class="nav-item border rounded ml-2">
                            <a class="nav-link {{ request()->route()->getName() !== "get.browser.hack" ?: 'active' }}" href="{{ route('get.browser.hack') }}"><i class="fad fa-terminal"></i> Hack</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    @yield('browser_content')
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-3">
                <div class="card-header">
                    Recently visited
                </div>
                <div class="card-body">
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    Important IPs
                </div>
                <div class="card-body">
                </div>
            </div>
        </div>
    </div>
@endsection
