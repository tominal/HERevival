@extends('pages.browser.layouts.browser')

@section('browser_content')
{{--    {{ \Illuminate\Support\Facades\Blade::compileString($webserver) }}--}}

    {{-- i stopped here. need to create an npc relation. i think thats what we talked about --}}
    {{ $webserver }}
    <br/>
    {{ $__env->make('pages.browser.types.whois', ['npc_id' => 1], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render() }}
@endsection
