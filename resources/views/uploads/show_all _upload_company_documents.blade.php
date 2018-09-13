@extends('layouts.admin_app')

    @section('content')
<div class="container" style="padding-bottom: 50px; padding-top: 30px">
        <h2>Uploaded Files</h2>
        <br>
<!--        <form action="/upload_d/{{$uploads->id}}" enctype="multipart/form-data"  method="post">
            {{ csrf_field() }}
            @foreach($companies as $company)
            @if($company->id == $uploads->company_id)
            <input type="text" hidden  value="{{$company->id}}" name="company_id">
            @endif
            @endforeach
            <button type="submit" class="btn btn-danger pull-right">Delete</button>
        </form>-->
        <a href="/all_company/" class="btn btn-default pull-right">Back</a>
        <br><hr>
        @if($uploads->bee_certificate == "nodocument.jpg")
        <div><h4>BEE Certificate <br></h4>N/A</div>
        @else
        <div><h4>BEE Certificate</h4></div>
        <iframe src ="{{ asset('storage/document_uploads/') }}/<?php echo $uploads->bee_certificate; ?>" width="100%" height="600px"></iframe>
        @endif
        
        @if($uploads->non_standard_mou == "nodocument.jpg")
        <div><h4>Standard MOU<br></h4>N/A</div>
        @else
        <div><h4>Standard<br></h4></div>
        <iframe src ="{{ asset('storage/document_uploads/') }}/<?php echo $uploads->non_standard_mou; ?>" width="100%" height="600px"></iframe>
        @endif
        
        @if($uploads->qtr_fin_statement == "nodocument.jpg")
        <div><h4>Quarter Financial Statement<br></h4>N/A</div>
        @else
        <div><h4>Quarter Financial Statement</h4></div>
        <iframe src ="{{ asset('storage/document_uploads/') }}/<?php echo $uploads->qtr_fin_statement; ?>" width="100%" height="600px"></iframe>
        @endif
        
        @if($uploads->year_fin_statement == "nodocument.jpg")
        <div><h4>Current Year Financial Statement<br></h4>N/A</div>
        @else
        <div><h4>Current Year Financial Statement</h4></div>
        <iframe src ="{{ asset('storage/document_uploads/') }}/<?php echo $uploads->year_fin_statement; ?>" width="100%" height="600px"></iframe>
        @endif
        
        @if($uploads->year_cashflow_statement == "nodocument.jpg")
       <div><h4>Current Year Cash Statement<br></h4>N/A</div>
        @else
        <div><h4>Current Year Cash Statement</h4>/div>
        <iframe src ="{{ asset('storage/document_uploads/') }}/<?php echo $uploads->year_cashflow_statement; ?>" width="100%" height="600px"></iframe>
        @endif
        
        @if($uploads->year_2_fin_statement == "nodocument.jpg")
        <div><h4>Last Year Financial Statement<br></h4>N/A</div>
        @else
        <div><h4>Last Year Financial Statement</h4></div>
        <iframe src ="{{ asset('storage/document_uploads/') }}/<?php echo $uploads->year_2_fin_statement; ?>" width="100%" height="600px"></iframe>
        @endif
        
        @if($uploads->year_2_cashflow_statement == "nodocument.jpg")
        <div><h4>Recent Cashflow Statement<br></h4>N/A</div>
        @else
        <div><h4>Recent Cashflow Statement</h4></div>
        <iframe src ="{{ asset('storage/document_uploads/') }}/<?php echo $uploads->year_2_cashflow_statement; ?>" width="100%" height="600px"></iframe>
        @endif
        
        @if($uploads->year_3_fin_statement == "nodocument.jpg")
        <div><h4>Other Recent Financial Statement<br></h4>N/A</div>
        @else
        <div><h4>Other Recent Financial Statement</h4></div>
        <iframe src ="{{ asset('storage/document_uploads/') }}/<?php echo $uploads->year_3_fin_statement; ?>" width="100%" height="600px"></iframe>
        @endif
        
        @if($uploads->year_3_cashflow_statement == "nodocument.jpg")
        <div><h4>Recent Cashflow Statement<br></h4>N/A</div>
        @else
        <div><h4>Recent Cashflow Statement<br></h4></div>
        <iframe src ="{{ asset('storage/document_uploads/') }}/<?php echo $uploads->year_3_cashflow_statement; ?>" width="100%" height="600px"></iframe>
        @endif
</div>

    @endsection
