@extends('admin.layout')

@section('content')
<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Basic form</h4>
                <p class="card-description"> Basic form elements </p>
                <form class="forms-sample" action="{{route('admin.orders.update', $order->id)}}" method="post">
                {{ csrf_field()}}
                {{ method_field('PUT')}}
                    <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input name="name" value="{{$order->name}}" type="text" class="form-control" id="exampleInputName1" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Desc</label>
                        <input name="email" value="{{$order->desc}}" type="text" class="form-control" id="exampleInputEmail3" placeholder="Desc">
                    </div>
                    <button type="submit" class="btn btn-success mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection