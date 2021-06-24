@extends('layouts.app')

@section('content')
<section class="section-content bg padding-y">
    <div class="container">

        <article class="text-muted">

            
            <h1> User : {{Auth::user()->name}} </h1> <br>
            <h2>  User Dashboard </h2>
            
        </article>
    </div> <!-- container .//  -->
</section>
@endsection