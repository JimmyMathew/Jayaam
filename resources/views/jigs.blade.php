@extends('master')

@section('title')
<title>Display Records</title>
@stop

@section('content')


    <table id='processes' border="1px" class="table table-striped responsive-utilities jambo_table">
        <thead>
        <tr>
            <th>id</th>
            <th>job_code</th>
            <th>lot_no</th>
            <th>fixture</th>
            <th>jig_no</th>
            <th>status</th>
            <th>image</th>
           
        </tr>
        </thead>
        <tbody>
        <tr>
            @foreach($results as $rec)
                <td>{{$rec->id}}</td>
                <td>{{$rec->job_code}}</td>
                <td>{{$rec->lot_no}}</td>
                <td>{{$rec->fixture}}</td>
                <td>{{$rec->jig_no}}</td>
                <td>{{$codeset[$rec->status]}}</td>
                <td></td>

               
        </tr>
        @endforeach
        </tbody>

    </table>
{{--scripts--}}
    <script src={{asset("js/jquery.js")}}></script>
    <script src={{asset("js/dataTable.js")}}></script>
    <script>
        $(function(){
            $('#processes').DataTable();
        });
    </script>
@stop