@extends('admin.layout')

@section('content')
<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Basic form</h4>
                <p class="card-description"> Basic form elements </p>
                <form class="forms-sample" action="{{route('admin.products.store')}}" method="post">
                {{ csrf_field()}}
                    <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input name="name" type="text" class="form-control" id="exampleInputName1" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Desc</label>
                        <input name="desc" type="email" class="form-control" id="exampleInputEmail3" placeholder="Desc">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Price</label>
                        <input name="price" type="password" class="form-control" id="exampleInputPassword4" placeholder="Price">
                    </div>
                    <button type="submit" class="btn btn-success mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection