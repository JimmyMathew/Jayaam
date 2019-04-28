@extends('master')

@section('title')
<title>Display Records</title>
@stop

@section('content')


    <table id='receipts' border="1px" class="table table-striped responsive-utilities jambo_table">

        <thead>
        <tr>
            <th>id</th>
            <th>job_code</th>
            <th>vehicle_regno</th>
            <th>party_dc</th>
            <th>dc_date</th>
            <th>party_name</th>
            <th>dc_weight</th>
            <th>wvl_weight</th>
            <th>wb_weight</th>
            <th>vehicle_in</th>
            <th>vehicle_out</th>
            <th>notes</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            @foreach($results as $rec)
                <td>{{$rec->id}}</td>
                <td>{{$rec->job_code}}</td>
                <td>{{$rec->vehicle_regno}}</td>
                <td>{{$rec->party_dc}}</td>
                <td>{{$rec->dc_date}}</td>
                <td>{{$rec->party_name}}</td>
                <td>{{$rec->dc_weight}}</td>
                <td>{{$rec->wvl_weight}}</td>
                <td>{{$rec->wb_weight}}</td>
                <td>{{$rec->vehicle_in}}</td>
                <td>{{$rec->vehicle_out}}</td>
                <td>{{$rec->notes}}</td>
        </tr>
        @endforeach
        </tbody>

    </table>
{{--scripts--}}
    <script src={{asset("js/jquery.js")}}></script>
    <script src={{asset("js/dataTable.js")}}></script>
    <script>
        $(function(){
            $('#receipts').DataTable();
        });
    </script>
@stop