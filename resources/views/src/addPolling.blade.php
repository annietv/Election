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

                <form action="{{route('storepollingUnit')}}" method="post">
                    @csrf
                    <div class="col-12 py-2">
                        Polling Unit ID
                        <input type="text" name="polling_unit_id" id="" class="form-control">
                    </div>
                    <div class="col-12 py-2">
                        Ward ID
                        <input type="text" name="ward_id" id="" class="form-control">
                    </div>
                    <div class="col-12 py-2">
                        LGA ID
                        <input type="text" name="lga_id" id="" class="form-control">
                    </div>
                    <div class="col-12 py-2">
                        Ward
                        <select name="uniquewardid" class="form-control js-example-basic-multiple-limit" id="">
                            <option value="">Select Option</option>
                            @php
                            $ward=DB::table("ward")->get();
                            @endphp
                            @foreach($ward as $rows)
                            <option value="{{$rows->uniqueid}}">{{$rows->ward_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-12 py-2">
                        Polling Unit Number
                        <input type="text" name="polling_unit_number" id="" class="form-control">
                    </div>
                    <div class="col-12 py-2">
                        Polling Unit Name
                        <input type="text" name="polling_unit_name" id="" class="form-control">
                    </div>
                    <div class="col-12 py-2">
                        Polling Unit Description
                        <textarea name="polling_unit_description" class="form-control" id="compose-textarea" cols="30"
                            rows="10"></textarea>
                    </div>

                    <div class="col-12 py-2">
                        Latitude
                        <input type="text" name="lat" id="" class="form-control">
                    </div>
                    <div class="col-12 py-2">
                        Longitude
                        <input type="text" name="long" id="" class="form-control">
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