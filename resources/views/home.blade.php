@extends('layouts.app', ['page_name' => 'Control Panel'])

@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header border-bottom-0">
                    <i class="fad fa-laptop"></i> Hardware Information
                </div>
                <table class="table table-striped mb-0">
                    <tr>
                        <td><i class="fad fa-microchip"></i></td>
                        <td>Processor</td>
                        <td>{{ auth()->user()->servers()->sum('cpu') / 1024 }} GHz</td>
                    </tr>
                    <tr>
                        <td><i class="fad fa-hdd"></i></td>
                        <td>Hard Drive</td>
                        <td>{{ auth()->user()->servers()->sum('hdd') / 1024 }} GB</td>
                    </tr>
                    <tr>
                        <td><i class="fad fa-memory"></i></td>
                        <td>Memory</td>
                        <td>{{ auth()->user()->servers()->sum('ram') / 1024 }} GB</td>
                    </tr>
                    <tr>
                        <td><i class="fad fa-ethernet"></i></td>
                        <td>Network</td>
                        <td>{{ auth()->user()->servers()->sum('network') }} Mbit/s</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection
