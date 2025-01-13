@extends('layouts.dashboard.master')
@section('content')

    <!-- **************** MAIN CONTENT START **************** -->
    <main>

        <!-- =======================
        Main contain START -->
        <section class="py-4">
            <div class="container">
                <div class="row g-4">
                    @include('dashboard.partials.news.createNewsMain')

                </div>
            </div>
        </section>

    </main>
@endsection
<!-- **************** MAIN CONTENT END **************** -->


