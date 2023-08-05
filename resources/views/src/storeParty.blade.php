@extends ('layouts.master')
@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row  p-3">

            <div class="col-lg-8">
                @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
                @endif
                <form action="{{route('storeParty')}}" method="post">
                    @csrf
                    <div class="col-12 py-2">
                        Result ID
                        <input type="text" name="result_id" id="" class="form-control">
                    </div>
                    <div class="col-12 py-2">
                        Polling Unit
                        <select name="polling_unit_uniqueid" class="form-control js-example-basic-multiple-limit" id="">
                            <option value="">Select Option</option>
                            @php
                            $polling_unit=DB::table("polling_unit")->get();
                            @endphp
                            @foreach($polling_unit as $row)
                            <option value="{{$row->uniqueid}}">{{$row->polling_unit_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-12 py-2">
                        Parties
                        <select name="party_abbreviation" class="form-control js-example-basic-multiple-limit" id="">
                            <option value="">Select Option</option>
                            @php
                            $party=DB::table("party")->get();
                            @endphp
                            @foreach($party as $parties)
                            <option value="{{$parties->partyid}}">{{$parties->partyid}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-12 py-2">
                        Party Score
                        <input type="text" name="party_score" id="" class="form-control">
                    </div>
                    <div class="col-12 py-2">
                        Enter By
                        <input type="text" name="entered_by_user" id="" class="form-control">
                    </div>
                    <div class="col-12 py-2">

                        <button class="btn btn-primary" type="submit"><i class="fa fa-plus-square"></i> Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection