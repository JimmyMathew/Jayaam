@extends('master')

@section('title')
<title>Display Records</title>
@stop

@section('content')

    <h1>DEGREASING SOLUTION</h1>
    <table id='labreport' border="1px" class="table table-striped responsive-utilities jambo_table">
        <thead>
        <tr>
            <th>tank_no</th>
            <th>temp(C)-ambient</th>
            <th>pH_2-3</th>
            <th>concentration_5-10%</th>
            <th>add_solution</th>
            <th>replace_tank</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            @foreach($dgrs as $dgr)
                <td>{{$dgr->tank_no}}</td>
                <td>{{$dgr->temp}}</td>
                <td>{{$dgr->ph}}</td>
                <td>{{$dgr->concentration}}</td>
                <td>{{$dgr->add_solution}}</td>
                <td>{{$dgr->replace_tank}}</td>
        </tr>       
         @endforeach
        </tbody>
</table>

<H1> PICKLING SOLUTION </H1>
<table id='labreport' border="1px" class="table table-striped responsive-utilities jambo_table">
 <thead>
        <tr>
            <th>tank_no</th>
            <th>temp(C)-ambient</th>
            <th>specific_gravity-1.100-1.220</th>
            <th>hcl_concentration_15-5%</th>
            <th>iron_content(g/l)_maximum-120</th>
            <th>add_solution</th>
            <th>replace_tank</th>
        </tr>
        </thead>
       
        <tbody>
        <tr>
            @foreach($pcks as $pck)
                <td>{{$pck->tank_no}}</td>
                <td>{{$pck->temp}}</td>
                <td>{{$pck->specific_gravity}}</td>
                <td>{{$pck->concentration}}</td>
                <td>{{$pck->add_solution}}</td>
                <td>{{$pck->replace_tank}}</td>
        </tr>
        @endforeach
        </tbody>
 </table>

<H1> RINSING </H1>
<table id='labreport' border="1px" class="table table-striped responsive-utilities jambo_table">
<thead>
        <tr>
            <th>tank_no</th>
            <th>temp(C)-ambient</th>
            <th>pH(2-6)</th>
            <th>add_water</th>
            <th>replace_tank</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            @foreach($rnss as $rns)
                <td>{{$rns->tank_no}}</td>
                <td>{{$rns->temp}}</td>
                <td>{{$rns->ph}}</td>
                <td>{{$rns->add_water}}</td>
                <td>{{$rns->replace_tank}}</td>
        </tr>
        @endforeach
        </tbody>
</table>

<H1> PRE FLUX SOLUTION </H1>
<table id='labreport' border="1px" class="table table-striped responsive-utilities jambo_table">
        <thead>
        <tr>
            <th>tank_no</th>
            <th>pH_3.5-5</th>
            <th>sp_gr_1.100-1.150</th>
            <th>zinc-ammonium_chloride_content(g/l)_200-400</th>
            <th>iron_content_maximum-5(g/l)</th>
            <th>add_solution(ZnCl2+NH4Cl2)kg</th>
            <th>replace_tank</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            @foreach($flxs as $flx)
                <td>{{$flx->tank_no}}</td>
                <td>{{$flx->ph}}</td>
                <td>{{$flx->specific_gravity}}</td>
                <td>{{$flx->zinc_ammonium_chloride_content}}</td>
                <td>{{$flx->iron_concentration}}</td>
                <td>{{$flx->add_solution}}</td>
                <td>{{$flx->replace_tank}}</td>
        </tr>
        @endforeach
        </tbody>
</table>

<H1> HOT PLATE </H1>
<table id='labreport' border="1px" class="table table-striped responsive-utilities jambo_table">
 <thead>
        <tr>
            <th>tank_no</th>
            <th>temp(C)about_120C</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            @foreach($drys as $dry)
                <td>{{$dry->tank_no}}</td>
                <td>{{$dry->temp}}</td>
        </tr>
        @endforeach
        </tbody>
</table>

<H1> ZINC TANK </H1>
<table id='labreport' border="1px" class="table table-striped responsive-utilities jambo_table">
<thead>
        <tr>
            <th>tank_no</th>
            <th>temp(C)above_440-460C</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            @foreach($galvs as $galv)
             <td>{{$galv->tank_no}}</td>
                <td>{{$galv->temp}}</td>
        </tr>
        @endforeach
        </tbody>
</table>

<H1> QUENCHING </H1>
<table id='labreport' border="1px" class="table table-striped responsive-utilities jambo_table">
       <thead>
        <tr>
            <th>tank_no</th>
            <th>pH(5-6)</th>
            <th>tds_maximum_100ppm</th>
            <th>add_water</th>
            <th>replace_tank</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            @foreach($ques as $que)
                <td>{{$que->tank_no}}</td>
                <td>{{$que->ph}}</td>
                <td>{{$que->tds_maximum}}</td>
                <td>{{$que->add_water}}</td>
                <td>{{$que->replace_tank}}</td>
        </tr>
        @endforeach
        </tbody> 
</table>

<H1> DE-OXIDANT </H1>
   <table id='labreport' border="1px" class="table table-striped responsive-utilities jambo_table">
        <thead>
        <tr>
            <th>tank_no</th>
            <th>pH(3-7)</th>
            <th>temp(C)_max65</th>
            <th>chromate_content_max1%</th>
            <th>add_solution</th>
            <th>replace_tank</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            @foreach($pass as $pas)
                <td>{{$pas->tank_no}}</td>
                <td>{{$pas->ph}}</td>
                <td>{{$pas->temp}}</td>
                <td>{{$pas->chromate_content}}</td>
                <td>{{$pas->add_solution}}</td>
                <td>{{$pas->replace_tank}}</td>
        </tr>
        @endforeach
        </tbody>         

    </table>
{{--scripts--}}
    <script src={{asset("js/jquery.js")}}></script>
    <script src={{asset("js/dataTable.js")}}></script>
    <script>
        $(function(){
            $('#labreport').DataTable();
        });
    </script->
@stop