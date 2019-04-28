@extends('master')

@section('title')
<title>select date</title>
@stop

@section('content')
<form action = "labreport" method="post">
<input type="date" name="date">
<input type="submit" class="btn btn-round btn-primary" value="Fetch Lab Report">
</form>

@stop