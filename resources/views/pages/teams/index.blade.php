@extends('layouts.app')

@section('content')
    <main>
      <!-- Page Banner -->
      @include('components.page_banner',['title'=>'Our Team','banner_image'=>'assets/img/banner/page-banner.png'])   
      <!-- Our Team -->
      <div class="our-team mt-100">
        <div class="container">
          <div class="row product-grid">
            @foreach($teams as $team)
              @include('components.cards.team_member_card',['team'=>$team])
            @endforeach      
          </div>
        </div>
      </div>
    </main>
    
@endsection