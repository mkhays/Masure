<!-- Basic table -->

@extends('layouts.admin_master')
@section('content')

<div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title">Malaria Surveillance Form</h5>
        <div class="header-elements">
            <div class="list-icons">
                <i class="icon-add"></i><a href="{{route('malaria.create')}}">Add new Malaria Case</a>

            </div>
        </div>
    </div>
    <div class="card-body">
       Malaria Surveillance Tracker
    </div>
    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <th>Rec No</th>
                <th>Patient Name</th>
                <th>Date of Birth</th>
                <th>Gender</th>
                <th>Hospital Name</th>
                <th>Is Pregnant</th>
                <th>Lab Test</th>
            </tr>
            </thead>
            <tbody>
            @foreach($malariaview as $view)
            <tr>
                <td>{{$view->hospitalrecno}}</td>
                <td>{{$view->patient_name}}</td>
                <td>{{$view->dob}}</td>
                <td>{{$view->gender}}</td>
                <td>{{$view->hopitalname}}</td>
                <td>{{$view->ispregnant}}</td>
                <td>{{$view->plabtest}}</td>
            </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
@stop
<!-- /basic table -->