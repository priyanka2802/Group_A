@extends('admin.layoutadmin')
@section('content')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Dashboard</h1>
            </div>
        </div>
    </div>

 <div class="content mt-4">
    <div class="animated fadeIn">


        <div class="row">
          <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    </div>
                <div class="card-body">
                  <!-- Credit Card -->
                  <div id="pay-invoice">
                      <div class="card-body">
                          <div class="card-title">
                              <h3 class="text-center"><i class="fa fa-user">&nbsp</i>Holiday List</h3>
                          </div>
                          <hr>
                          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
            </div>
              <div class="card-body card-block">
                <table class="table">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Date</th>
                      <th scope="col">Description</th>
                      </tr>
                  </thead>
                  <tbody>
                  @foreach($holiday as $list)
                    <tr>
                      <th scope="row">{{$list->ID}}</th>
                      <td>{{$list->Date}}</td>
                      <td>{{$list->Description}}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>

            </div>
        </div>

    </div>
</div> <!-- .card -->
</div><!--/.col-->

@endsection
