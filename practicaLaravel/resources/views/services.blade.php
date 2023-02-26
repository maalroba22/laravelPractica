@extends('layout.landing')


@section('title','Service')

@section('content')

<h1>Service</h1>
<div class="contenservices">
            @component('_components.card')
                @slot('title','titulo 1')
                @slot('conten','i am manuel romero')
            @endcomponent
            @component('_components.card')
                @slot('title','titulo 2')
                @slot('conten','i am manuel romero')
            @endcomponent
            @component('_components.card')
                @slot('title','titulo 3')
                @slot('conten','i am manuel romero')
            @endcomponent
</div>

@endsection()