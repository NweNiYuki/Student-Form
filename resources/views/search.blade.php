@extends('layout')
@section('content')

    <h1 class="mt-5 mb-5">
        <i class="feather-users"></i>
        Manage Student List 
    </h1>
    <div class="row">
        <div class="col-md-10">
            <input type="text" name="search" id="search" class="form-control" placeholder="Search" value="">
        </div>
    </div>
    <div class="col-md-2">
    @csrf
        <button type="button" name="search" id="search" class="btn btn-success">Search</button>
    </div>
  
    <div style="float: right">
       <a href="uni/create" ><button  style="color: #FF9800" class="btn btn-dark"><i class="feather-plus"></i> Add New Student</button></a>
       
    </div>

    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <th><i class="feather-align-justify"></i> ID</th>
            <th><i class="feather-user-check"></i> Name</th>
            <th>Roll Number</th>
            <th>Subject</th>
            <th>ID Number</th>
            <th><i class="feather-mail"></i> Your Email</th>
            <th><i class="feather-home"></i> Your Address</th>
            <th><i class="feather-phone-call"></i> Phone</th>
            <th>Image </th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
       
        </tbody>
    
        

  
    </table>

    <script>
        $(document).ready(function() {
            load_data();
            function load_data(search_query= '')
            {
                var_token = $("input[name=_token]").val();
                $.ajax({
                    url:"{{ route('search.action') }}",
                    method: "POST",
                    data:{search_query:
                    search_query, _token:token},
                    dataType: "json",
                    success:function(data)
                    {
                        var output= '';
                        if(data.length > 0)
                        {
                            for(var count= 0; count < data.length; count++)
                            {
                                output += '<tr>';
                                output += '<td>'+ data[count].name+'<td>';
                                output += '<td>'+ data[count].rollno+'<td>';
                                output += '<td>'+ data[count].subject+'<td>';
                                output += '<td>'+ data[count].address+'<td>';
                                output += '<td>'+ data[count].idno+'<td>';
                                output += '<tr>';
                            }
                        }
                        else
                        {
                            output += '<tr>';
                            output += '<td colspan="6">No Data Found</td>';
                            output += '<tr>';
                        }
                        $('tbody').html(output);
                    }
                });
            }

            $('#search').click(function(){
                var search_query = $('#search').val();
                load_data(search_query);
            });
        });
    </script>

@endsection