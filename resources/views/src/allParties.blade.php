@extends ('layouts.master')
@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row  p-3">

            <table class="table" id="example2">
                <thead>
                    <th>#</th>
                    <th>Parties</th>
                    <th>Results</th>
                    <th>Polling Unit No.</th>
                    <th>Polling Unit Name</th>
                    <th>Polling Unit Desc</th>
                </thead>
                @php
                $i=1
                @endphp
                <tbody>
                    @foreach($parties as $row)

                    <tr>
                        <td>@php echo $i++; @endphp</td>
                        <td>{{$row->partyname}}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    @endforeach

                </tbody>

            </table>
        </div>
    </div>
</div>


@endsection