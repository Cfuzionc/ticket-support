@extends('layouts.app')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form>
                        <div class="form-group">
                          <label for="exampleFormControlInput1">Subject</label>
                          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter your ticket subject"><br>
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlTextarea1">Description</label>
                          <textarea placeholder="Enter the issue at question" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea><br>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Add screenshot / video <b>(optional)<b></label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                            <button type="submit" class="btn btn-primary ticket_submit">Submit</button>
                          </div>

                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
