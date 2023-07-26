@extends("layouts.app")

@section("content")

    {{-- présentation start --}}
    @include('components.presentation')
    {{-- présentation end --}}

    {{-- article section start --}}
    @include('components.article')
    {{-- article section end --}}

    {{-- partenaire start --}}
    @include("components.partenaire")
    {{-- partenaire end --}}

    {{-- equipe start --}}
    @include('components.equipe')
    {{-- equipe end --}}

@endsection
