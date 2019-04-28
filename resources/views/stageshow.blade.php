@extends('master')

@section('title')
<title>Display Records in Materials Table</title>
    
@stop


@section('content')

<table id='materials' class="table table-striped responsive-utilities jambo_table">
    <thead>
    <tr>
        <th>id</th>
        <th>process_id</th>
        <th>image</th>   
        <!-- define the path for image  -->
        <th>stage</th>
        <th>facility</th>
        <th>time_in</th>
        <th>time_out</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        @foreach($result as $record)
            <td>{{$record->id}}</td>
            <td>{{$record->process_id}}</td>
            <td><a href={{asset("upload/".$record->image)}} target="_blank" onclick="window.open('{{asset("upload/".$record->image)}}', 'popup', 'height=200, width=200'); return false;">Viewmimg</a></td>
           
           <!-- define the path for image  -->
           <!-- <td><img src={{asset("upload/".$record->image)}}> </td> -->  
            <td>{{$record->stage}}</td>
            <td>{{$record->facility}}</td>
            <td>{{$record->time_in}}</td>
            <td>{{$record->time_out}}</td>
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