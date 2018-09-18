@extends('layouts.app')

@section('content')
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Dashboard</h4>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex align-items-center justify-content-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        @include('layouts.inc.messages')
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">List of Companies</h4>
                    </div>
                    <a id="create_btn" href="add_company" class="btn">Add New Company</a>
                    <div class="table-responsive m-t-40"  style="margin-left: 2px; margin-right: 1px">
                        <table id="myTable" class="table-bordered table-striped"cellspacing="0" width="100%">

                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Contact</th>
                                    <th>Submissions</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody> 
                                @foreach($companies as $company)
                                @if($company -> deleted == "No")
                                <tr>
                                    <td><?php echo ucwords($company->company_name)?></td>
                                    <td><?php echo ucfirst($company->primary_contact_email)?></td>
                                    <td>
                                        @if($company->documents_upload == "No")
                                            <a title="upload documents" id="text_btn" class="text-center"href="/upload/{{$company->id}}"><i class="fa fa-upload" aria-hidden="true"></i> Upload</a> /
                                        @else
                                        @foreach($uploads as $upload)
                                        @if($company->id == $upload->company_id && $upload->deleted == "No")
                                            <a title="view upload" id="text_btn" class="text-center"href="{{route('uploads.show', ['upload'=>$upload] )}}"> View Upload</a> /
                                        @endif
                                        @endforeach
                                        @endif

                                        @if($company->Tracked == "No")
                                            <a title="tracking" id="text_btn" class="text-center"href="/trackings/{{$company->id}}"><i class="fa fa-map-marker" aria-hidden="true"></i> Tracking</a>
                                        @else
                                        @foreach($trackings as $tracking)
                                        @if($company->id == $tracking->company_id && $tracking->deleted == "No")
                                            <a title="view tracking" id="text_btn" class="text-center"href="{{route('tracking.show', ['tracking'=>$tracking] )}}"></i> View Tracking</a>
                                       
                                        @endif
                                        @endforeach
                                        @endif
                                    </td>
                                    <td><a id="text_btn" title="view company details" class="text-center"href="{{route('companies.show', ['company'=>$company] )}}"> View</a> / 
                                        <a id="edit_btn" title="edit company" class="text-center"href="/companies/{{$company->id}}/edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                        / <a id="delete_btn" title="delete company" class="text-center"href="/delete_company/{{$company->id}}"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                                </tr>
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                        <!-- modal for deleting-->

                        <!-- /.modal Ending -->
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- ============================================================== -->

    @include('layouts.inc.new_footer')
    <!-- ============================================================== -->
</div>
@endsection

