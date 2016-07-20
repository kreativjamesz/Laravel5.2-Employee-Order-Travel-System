@extends('dashboard.layouts.master')
@section('content')

	<section class="content">
        <section class="content-header">
            <h1>
                Employees List
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="/"><i class="fa fa-home"></i> Home</a></li>
                <li><a href="/home"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                <li class="active">Employee</li>
            </ol>
        </section>
        <section class="content-container">
        	<div class="row">
				<div class="box">
			    		<div class="box-header">
			    			<a href=""class="btn btn-primary pull-left btn-purple" >Add new employee</a>
		    			</div><!-- /.box-header -->
				    	<div class="box-body">
			        		<table id="employees-table" class="table table-hover table-bordered tabl-responsive">
					          	<thead>
						            <tr>
						            	<th>ID</th>
					              		<th>Last Name</th>
				    					<th>First Name</th>
				    					<th>Title</th>
				    					<th>Position</th>
				    					<th>Mobile Number</th>
				    					<th>Email</th>
				    					<th>Status</th>
				    					<th>ACTIONS</th>
					            	</tr>
					          	</thead>
				          		<tbody>
					            @foreach ($employees as $employee)
					              <tr>
					                {{-- <td data-order="{{ $employee->published_at->timestamp }}">
					                  {{ $employee->published_at->format('j-M-y g:ia') }}
					                </td> --}}
									<td>{{ $employee->id }}</td>
					                <td>{{ $employee->last_name }}</td>
					                <td>{{ $employee->first_name }}</td>
					                <td>{{ $employee->title_name }}</td>
					                <td>{{ $employee->position_name }}</td>
					                <td>{{ $employee->mobile_num }}</td>
									<td>{{ $employee->email_add }}</td>
									<td>{{ $employee->status }}</td>
					                <td>
					                  <a href="/list/{{ $employee->id }}/edit"
					                     class="btn btn-xs btn-info">
					                    <i class="fa fa-edit"></i> Edit
					                  </a>
					                  <a href="/list/{{ $employee->slug }}"
					                     class="btn btn-xs btn-warning">
					                    <i class="fa fa-eye"></i> View
					                  </a>
					                </td>
					              </tr>
					            @endforeach

					          	</tbody>
								
					        </table>
					        <div class="row">
							    <div class="col-sm-12 col-md-6 col-lg-6 ">
							        <div class="dataTables_info" id="employees-table_info" role="status" aria-live="polite">Showing {{$employees->currentPage()}} to {{$employees->perPage()}} of {{$employees->total()}} entries</div>
							    </div>
							    <div class="col-sm-12 col-md-6 col-lg-6 ">
							    	<p style="float:right;">{{ $employees->links() }}</p>
							    </div>
							</div>
			        		
		        		</div>
			</div>
	        

        </section>
    </section>

@endsection
@section('scripts')
<script src="{{URL::asset('../plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::asset('../plugins/datatables/dataTables.bootstrap.min.js')}}"></script>
<script type="text/javascript">
$('#employees-table').DataTable({
	"order": [[0, "asc"]],
  	"paging": false,
  	"lengthChange": false,
  	"searchable": true,
  	"ordering": false,
  	"info": false,
  	"autoWidth": false
});
 
</script>
@endsection