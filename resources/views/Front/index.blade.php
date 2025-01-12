@extends('layouts.front.master')

@section('content')


<!-- **************** MAIN CONTENT START **************** -->
<main>

    @include('Front.partials.index.trendingNews')
    @include('Front.partials.index.dailyNews')
    @include('Front.partials.index.NewsCats')
    @include('Front.partials.index.hotNews')
    @include('Front.partials.index.videoNews')
    @include('Front.partials.index.techNews')
    @include('Front.partials.index.sportNews')
    @include('Front.partials.index.editorNews')

</main>
@endsection
<!-- **************** MAIN CONTENT END **************** -->


