@extends('layouts.guest')

@section('content')

<section class="our-register">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 m-auto wow fadeInUp" data-wow-delay="300ms">
            <div class="main-title text-center">
                <h2 class="title">Register</h2>
                <p class="paragraph">
                    Join the DiePlan Community to have a better health service
                </p>
          </div>
        </div>
    </div>
    <div class="row wow fadeInRight" data-wow-delay="300ms">
        <div class="col-xl-6 mx-auto">
          <div
            class="log-reg-form search-modal form-style1 bgc-white p50 p30-sm default-box-shadow1 bdrs12"
            >
            <div class="mb30">
                <h4>Let's create your account!</h4>
                <p class="text mt20">
                    Already have an account?
                    <a href="{{ route('login') }}" class="text-thm">Log In!</a>
                </p>
            </div>
            <form method="POST" action="{{ route('register') }}">
                @csrf
            <div class="mb25">
                <label class="form-label fw500 dark-color"
                >Display Name</label
                >
              <input type="text" class="form-control" name="name" placeholder="ali" />
              <x-input-error :messages="$errors->get('name')" class="mt-2 text-danger" />
            </div>
            {{-- <div class="mb25">
              <label class="form-label fw500 dark-color">Username</label>
              <input
                type="text"
                class="form-control"
                placeholder="alitf"
              />
            </div> --}}
            <div class="mb25">
              <label class="form-label fw500 dark-color">Email</label>
              <input
                type="email"
                name="email"
                class="form-control"
                placeholder="alitfn58@gmail.com"
              />
              <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />

            </div>
            <div class="mb15">
              <label class="form-label fw500 dark-color">Password</label>
              <input
                type="password"
                name="password"
                class="form-control"
                placeholder="*******"
              />
              <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger" />

            </div>
            <div class="mb15">
              <label class="form-label fw500 dark-color">Confirm Password</label>
              <input
                type="password"
                name="password_confirmation"
                class="form-control"
                placeholder="*******"
              />
              <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-danger" />

            </div>
            <div class="d-grid mb20">
              <button
                class="ud-btn btn-thm default-box-shadow2"
                type="submit"
              >
                Creat Account <i class="fal fa-arrow-right-long"></i>
              </button>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection



