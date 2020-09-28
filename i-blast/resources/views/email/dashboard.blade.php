@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="card card-chart">
                <div class="card-header card-header-rose" data-header-animation="true">
                    <div class="ct-chart" id="websiteViewsChart"></div>
                </div>
                <div class="card-body bg-danger">
                    <P></P>
                </div>
                <div class="card-footer">
                  <div class="stats">
                      <i class="material-icons">access_time</i> campaign sent 2 days ago
                  </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-chart">
                <div class="card-header card-header-rose" data-header-animation="true">
                    <div class="ct-chart" id="websiteViewsChart"></div>
                </div>
                <div class="card-body bg-info">

                </div>
                <div class="card-footer">
                  <div class="stats">
                      <i class="material-icons">access_time</i> campaign sent 2 days ago
                  </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-chart">
                <div class="card-header card-header-rose" data-header-animation="true">
                    <div class="ct-chart" id="websiteViewsChart"></div>
                </div>
                <div class="card-body bg-success">

                </div>
                <div class="card-footer">
                  <div class="stats">
                      <i class="material-icons">access_time</i> campaign sent 2 days ago
                  </div>
                </div>
            </div>
        </div>
    </div>
@endsection
