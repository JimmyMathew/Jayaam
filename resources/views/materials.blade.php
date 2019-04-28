@extends('master')

@section('title')

  @stop
@section('content')

<table id='materials' border="1px" class="table table-striped responsive-utilities jambo_table">
    <thead>
    <tr>
        <th>id</th>
        <th>job_code</th>
        <th>description</th>
        <th>quantity</th>
        <th>lot_no</th>
        <th>rejected</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        @foreach($result as $record)
            <td>{{$record->id}}</td>
            <td>{{$record->job_code}}</td>
            <td>{{$record->description}}</td>
            <td>{{$record->quantity}}</td>
            <td>{{$record->lot_no}}</td>
            <td>{{$record->rejected}}</td>
    </tr>
    @endforeach
    </tbody>


</table>
{{--scripts--}}
<script src={{asset("js/jquery.js")}}></script>
<script src={{asset("js/dataTable.js")}}></script>
<script>
    $(function(){
        $('#materials').DataTable();
    });
</script>
@stop
