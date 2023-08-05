@extends ('layouts.master')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row  p-3">

            <table class="table" id="example1">
                <thead>

                    <th>LGA</th>
                    <th>State</th>
                    <th>Polling Unit No.</th>
                    <th>Polling Unit Name</th>
                    <th>Total Polling Unit Score</th>
                </thead>
                <tbody>
                    @foreach($result as $row)
                    @php
                    $lga_id=$row->lga_id;
                    $lga=DB::select("SELECT * FROM lga WHERE lga_id=?",[$lga_id]);
                    @endphp
                    @foreach($lga as $lgas)
                    @php
                    $state_id=$lgas->state_id;
                    $state=DB::select("SELECT * FROM states WHERE state_id=?",[$state_id]);
                    $polling_result=DB::select("SELECT SUM(party_score) as score FROM announced_lga_results WHERE
                    lga_name=?",[$lga_id]);
                    @endphp
                    @foreach($state as $states)
                    @foreach($polling_result as $res)
                    <tr>
                        <td>{{$lgas->lga_name}}</td>
                        <td>{{$states->state_name}}</td>
                        <td>{{$row->polling_unit_number}}</td>
                        <td>{{$row->polling_unit_name}}</td>
                        <td>{{$res->score}}</td>
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