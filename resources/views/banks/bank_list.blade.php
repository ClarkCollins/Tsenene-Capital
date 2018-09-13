@extends('layouts.app')

    @section('content')
    <div class="container">


        <h2>List of Registered Banks</h2>
        <br>
        <a href="{{url('/banks/create')}}" class="btn btn-primary pull-right">Add New Bank</a>
        <a href="{{url('/home')}}" class="btn btn-default">Back</a>

        <br><hr>


        @if(count($banks)>0)

        <div class="row">
			<div class="col-md-10">
				<h4>Name</h4>
			</div>
			
			<div class="col-md-2">
				<h4>Actions</h4>
			</div>
		</div><hr>
        
        

        @foreach($banks as $bank)
        
       <div class="row">
		   <div class="col-md-10">
				{{$bank->bank_name}}
		   </div> 
		   
		   <div class="col-md-2">
				<div class="row">
					<a href="/banks/{{$bank->id}}">View</a>
				</div><br>
				
				<div class="row">
					 <a href="/banks/{{$bank->id}}/edit">Edit</a>
				</div><br>
				
				<div class="row">
                   
           
                    {!!Form::open(['action' => ['BanksController@destroy', $bank->id], 'method' =>'POST' ,'class'=>'pull-right'])!!}
                            
                            {!! Form::hidden('_method', 'DELETE') !!}
                            
                            {!! Form::submit('Delete') !!}
                    
                    {!! Form::close() !!}
                    
                </div><br>

		   </div> 
		</div>
		<hr>

   
        
            
        @endforeach
        
        {{$banks->links()}}


        @endif

        

</div>
        @endsection
