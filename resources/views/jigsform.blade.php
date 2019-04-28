@extends('master')

@section('title')
<title>select date</title>
@stop

@section('content')
<form action = "jigsview" method="post">
                                      
                                            
<input type="date" class="collapse-link" 
style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc" name="date">
<input type="submit" class="btn btn-round btn-primary" value="Fetch Jig Report">
</form>

@stop