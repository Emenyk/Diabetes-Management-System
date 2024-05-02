@extends('layouts.app')
@section('dashboard')
<div class="col-lg-12">
    <div class="dashboard_title_area">
      <h2>Create Reminder</h2>
      <p class="text">you can read document on how to create a plan on the education page.</p>
    </div>
  </div>

@endsection
@section('content')
<div class="row">
    <div class="col-xl-12">
      <div
        class="ps-widget bgc-white bdrs4 p30 mb30 overflow-hidden position-relative"
      >
        <div class="bdrb1 pb15 mb25">
          <h5 class="list-title">Remind Me</h5>
        </div>
        <div class="col-lg-7">
          <form class="form-style1">
            <div class="row">
              <div class="col-sm-6">
                <div class="mb20">
                  <label class="heading-color ff-heading fw500 mb10"
                    >Medication</label
                  >
                  <input type="date" name="name" class="form-control" />
                </div>
              </div>
              <div class="col-md-12">
                  <div class="mb10">
                      <label class="heading-color ff-heading fw500 mb10"
                      >Description</label
                      >
                      <textarea
                      name="description"
                      cols="30"
                      rows="6"
                      placeholder="Description"
                      ></textarea>
                    </div>
                </div>
                <div class="col-sm-6">
                  <div class="mb20">
                    <label class="heading-color ff-heading fw500 mb10"
                      >Date</label
                    >
                    <input type="date" name="date" class="form-control" />
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="mb20">
                    <label class="heading-color ff-heading fw500 mb10"
                      >Time</label
                    >
                    <input type="time" name="time" class="form-control" />
                  </div>
                </div>
              <div class="col-md-12">
                <div class="text-start">
                  <a class="ud-btn btn-thm" href="page-contact.html"
                    >Save<i class="fal fa-arrow-right-long"></i
                  ></a>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

@endsection
