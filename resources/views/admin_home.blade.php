@extends('layouts.admin_app')

@section('content')



<!-- Callout -->
    <section class="callout">
      <div class="container text-center">
        <div class="panel panel-default">
                

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
        <h2 class="mx-auto mb-10">Welcome to the Tsenene Capital Dashboard</h2><br>
        
          <h3 class="mx-auto mb-5"><em>If you haven't already, start by creating your company profile</em></h3>
        
      </div>
    </section>

    

@endsection
