@extends ('layouts.master')
@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row  p-3">

            <table class="table" id="example2">
                <thead>
                    <th>#</th>
                    <th>Ward</th>
                    <th>LGA</th>
                    <th>State</th>
                    <th>Polling Unit No.</th>
                    <th>Polling Unit Name</th>
                    <th>Polling Unit Desc</th>
                </thead>
                @php
                $i=1
                @endphp
                <tbody>
                    @foreach($polling_unit as $row)
                    @php
                    $ward_id=$row->ward_id;
                    $lga_id=$row->lga_id;
                    $ward=DB::select("SELECT * FROM ward WHERE ward_id=?",[$ward_id]);
                    $lga=DB::select("SELECT * FROM lga WHERE lga_id=?",[$lga_id]);
                    @endphp
                    @foreach($ward as $wards)
                    @foreach($lga as $lgas)
                    @php
                    $state_id=$lgas->state_id;
                    $state=DB::select("SELECT * FROM states WHERE state_id=?",[$state_id]);
                    @endphp
                    @foreach($state as $states)
                    <tr>
                        <td>@php echo $i++; @endphp</td>
                        <td>{{$wards->ward_name}}</td>
                        <td>{{$lgas->lga_name}}</td>
                        <td>{{$states->state_name}}</td>
                        <td>{{$row->polling_unit_number}}</td>
                        <td>{{$row->polling_unit_name}}</td>
                        <td>{{$row->polling_unit_description}}</td>
                    </tr>
                    @endforeach
                    @endforeach
                    @endforeach
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
</div>


@endsection