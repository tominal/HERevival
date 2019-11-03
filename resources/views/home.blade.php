@extends('layouts.app', ['page_name' => 'Control Panel'])

@section('content')
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-header border-bottom-0">
                    <i class="fad fa-laptop mr-2"></i> Hardware Information
                </div>
                <table class="table table-striped mb-0 table-icon">
                    <tr>
                        <td><i class="fad fa-microchip"></i></td>
                        <td>Processor</td>
                        <td>{{ auth()->user()->servers()->sum('cpu') / 1000 }} GHz</td>
                    </tr>
                    <tr>
                        <td><i class="fad fa-hdd"></i></td>
                        <td>Hard Drive</td>
                        <td>{{ auth()->user()->servers()->sum('hdd') / 1024 }} GB</td>
                    </tr>
                    <tr>
                        <td><i class="fad fa-memory"></i></td>
                        <td>Memory</td>
                        <td>{{ auth()->user()->servers()->sum('ram') / 1024 }} MB</td>
                    </tr>
                    <tr>
                        <td><i class="fad fa-ethernet"></i></td>
                        <td>Network</td>
                        <td>{{ auth()->user()->servers()->sum('network') }} Mbit/s</td>
                    </tr>
                    <tr>
                        <td><i class="fa fa-hdd"></i></td>
                        <td>External HD</td>
                        <td>{{ auth()->user()->servers()->sum('hdd') / 1000 }} GB</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="col-md-8 mb-4">
            <div class="card">
                <div class="card-header border-bottom-0">
                    <i class="fad fa-tablet mr-2"></i> General Info
                </div>
                <table class="table table-striped mb-0 table-icon">
                    <tr>
                        <td><i class="fad fa-medal"></i></td>
                        <td>Reputation</td>
                        <td>1,212,214 <small class="text-muted">Ranked #1</small></td>
                    </tr>
                    <tr>
                        <td><i class="fad fa-tasks-alt"></i></td>
                        <td>Running tasks</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td><i class="fad fa-globe"></i></td>
                        <td>Connected to</td>
                        <td>No one</td>
                    </tr>
                    <tr>
                        <td><i class="fad fa-folder"></i></td>
                        <td>Mission</td>
                        <td>None</td>
                    </tr>
                    <tr>
                        <td><i class="fad fa-user-friends"></i></td>
                        <td>Clan</td>
                        <td>Not a member</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 mb-4">
            <div class="row">
                <div class="col-md-12 mb-4">
                    <div class="card">
                        <div class="card-header border-bottom-0">
                            <i class="fad fa-newspaper mr-2"></i> News
                        </div>
                        <table class="table table-striped mb-0">
                            <tr>
                                <td>
                                    <a href="#">
                                        HaasW seized FBI suspect known as WeHa
                                    </a>
                                    <small class="text-muted">
                                        2019-11-02 21:24:00
                                    </small>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#">
                                        gari seized FBI suspect known as WeHa
                                    </a>
                                    <small class="text-muted">
                                        2019-11-02 21:22:37
                                    </small>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#">
                                        HaasW seized FBI suspect known as WeHa
                                    </a>
                                    <small class="text-muted">
                                        2019-11-02 20:54:24
                                    </small>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-header border-bottom-0">
                            <i class="fad fa-user-tie mr-2"></i> FBI Wanted List
                        </div>
                        <table class="table table-striped mb-0">
                            @forelse($wanted as $w)
                                <tr>
                                    <td>{{ $w->username }}</td>
                                    <td>{{ $w->bounty }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td>No wanted IPs ATM</td>
                                </tr>
                            @endforelse
                        </table>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-header border-bottom-0">
                            <i class="fad fa-stream mr-2"></i> Round Info
                            <span class="float-right badge badge-info">
                                Round 1
                            </span>
                        </div>
                        <table class="table table-striped mb-0">
                            <tr>
                                <td>Name</td>
                                <td>ROUND-01-ALPHA</td>
                            </tr>
                            <tr>
                                <td>Started</td>
                                <td>{{ date('Y-m-d') }}</td>
                            </tr>
                            <tr>
                                <td>Age</td>
                                <td>{{ rand() % 14 }} days</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-header border-bottom-0">
                    <i class="fad fa-chart-bar mr-2"></i> Top 7 Users
                </div>
                <table class="table table-striped mb-0 table-icon">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Reputation</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for($i = 0;$i < 7;$i++)
                            <tr>
                                <td>{{ $i+1 }}</td>
                                <td>
                                    <a href="#">
                                        {{ auth()->user()->username }}
                                    </a>
                                </td>
                                <td>
                                    1,212,214
                                </td>
                            </tr>
                        @endfor
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
