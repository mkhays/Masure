
@extends('layouts.admin_master')
@section('content')
<div class="card">
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card-header header-elements-inline">
        <h5 class="card-title">Malaria Surveillance Form</h5>
        <div class="header-elements">
            <div class="list-icons">
             <i class="icon-list"></i><a href="{{route('malaria.index')}}">View List</a>

            </div>
        </div>
    </div>

    <div class="card-body">
        <form action="{{route('malaria.store')}}" method="post">
            @csrf
            <div class="form-group row">
                <label class="col-lg-3 col-form-label">Patient Name</label>
                <div class="col-lg-9">
                    <input type="text" name="patientname" class="form-control">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-lg-3 col-form-label">Date of Birth</label>
                <div class="col-lg-9">
                    <input type="date" name="dob" class="form-control">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-lg-3 col-form-label">Gender</label>
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input value="male" type="radio" name="gender" class="form-check-input" checked>
                        Male
                    </label>
                </div>

                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input value="female" type="radio" name="gender" class="form-check-input">
                        Female
                    </label>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-3 col-form-label">Is Patient Pregnant</label>
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input value="1" type="radio" name="pregnant" class="form-check-input" checked>
                        Yes
                    </label>
                </div>

                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input value="2" type="radio" name="pregnant" class="form-check-input">
                        No
                    </label>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-3 col-form-label">Positive lab test result (check all that apply):</label>
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input type="checkbox" name="positive" class="form-check-input">
                        Smear
                    </label>
                </div>

                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input type="checkbox" name="positive" class="form-check-input">
                        PCR
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input type="checkbox" name="positive" class="form-check-input">
                        RDT
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input type="checkbox" name="positive" class="form-check-input">
                        No test done/unknown
                    </label>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-3 col-form-label">Hospital Name</label>
                <div class="col-lg-9">
                    <input type="text" name="hospital" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-3 col-form-label">Hospital Record Number</label>
                <div class="col-lg-9">
                    <input type="number" name="rec_no" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-3 col-form-label">Parasitemia (%):</label>
                <div class="col-lg-9">
                    <input type="number" name="parasitemia" class="form-control">
                </div>
            </div>

            <div class="text-right">
                <button type="submit" class="btn btn-primary">Submit form <i class="icon-paperplane ml-2"></i></button>
            </div>
        </form>
    </div>
</div>
@stop
<!-- /horizotal form -->