@extends('layouts.app')
  
@section('title', '')
  
@section('contents')
    <h1 class="mb-0">Profile</h1>
    <hr />
 
    <form method="POST" enctype="multipart/form-data" id="profile_setup_frm" action="" >


        <div class="row">
            <div class="col mb-3">
                <label class="labels">Name</label>
                <input type="text" name="name" class="form-control" placeholder="first name" value="{{ auth()->user()->name }}">
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="labels">Email</label>
                <input type="text" name="email" disabled class="form-control" value="{{ auth()->user()->email }}" placeholder="Email">
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="labels">Phone</label>
                <input type="text" name="phone" class="form-control" placeholder="Phone Number" value="{{ auth()->user()->phone }}">
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="labels">Address</label>
                <input type="text" name="address" class="form-control" value="{{ auth()->user()->address }}" placeholder="Address">
            </div>
        </div>
        <div class="row" style="margin-left: 0px;">
            <div class="d-grid">
                <button id="btn" class="btn btn-primary profile-button" type="submit">Save Profile</button>
            </div>
        </div>  
            
        </form>
@endsection