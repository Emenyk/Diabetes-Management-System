@extends('layouts.app')
@section('dashboard')
<div class="col-lg-12">
    <div class="dashboard_title_area">
      <h2>Education and Materials</h2>
      <p class="text">Lorem ipsum dolor sit amet, consectetur.</p>
    </div>
  </div>

@endsection
@section('content')
<div class="row">
    <div class="col-xl-12">
      <div class="ps-widget bgc-white bdrs4 p30 mb30 position-relative">
        <div class="navtab-style1">
          <nav>
            <div class="nav nav-tabs mb30" id="nav-tab2" role="tablist">
              <button class="nav-link active fw500 ps-0" id="nav-item1-tab" data-bs-toggle="tab" data-bs-target="#nav-item1" type="button" role="tab" aria-controls="nav-item1" aria-selected="true">Materials</button>

            </div>
          </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-item1" role="tabpanel" aria-labelledby="nav-item1-tab">
                <div class="row">
                <div class="col-sm-6 col-xl-3">
                    <div class="listing-style1">
                    <div class="list-thumb">
                        <img class="w-100" src="{{ asset('images/listings/g-1.jpg') }}" alt="">
                        <a href="#" class="tag-del" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Delete Item" aria-label="Delete Item"><span class="flaticon-delete"></span></a>
                    </div>
                    <div class="list-content">
                        <p class="list-text body-color fz14 mb-1">Diabetes Mellitus</p>
                        <h5 class="list-title"><a href="page-services-single.html">The negative effect of diabetes</a></h5>
                        <div class="review-meta d-flex align-items-center">
                        <i class="fas fa-star fz10 review-color me-2"></i>
                        <p class="mb-0 body-color fz14"><span class="dark-color me-2">4.82</span>94 reviews</p>
                        </div>
                        <hr class="my-2">
                        <div class="list-meta d-flex justify-content-between align-items-center mt15">
                        <a class="d-flex" href="#">
                            <span class="position-relative mr10">
                            <img class="rounded-circle wa" src="{{ asset('images/team/fl-s-1.png') }}" alt="Freelancer Photo">
                            <span class="online-badges"></span>
                            </span>
                            <span class="fz14">Wanda Runo</span>
                        </a>
                        <div class="budget">
                            <p class="mb-0 body-color">Starting at<span class="fz17 fw500 dark-color ms-1">$983</span></p>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="listing-style1">
                    <div class="list-thumb">
                        <img class="w-100" src="{{ asset('images/listings/g-2.jpg') }}" alt="">
                        <a href="#" class="tag-del" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Delete Item" aria-label="Delete Item"><span class="flaticon-delete"></span></a>
                    </div>
                    <div class="list-content">
                        <p class="list-text body-color fz14 mb-1">Symptoms and early Signs</p>
                        <h5 class="list-title"><a href="page-services-single.html">There is need to be aware of the early stage of diabetes</a></h5>
                        <div class="review-meta d-flex align-items-center">
                        <i class="fas fa-star fz10 review-color me-2"></i>
                        <p class="mb-0 body-color fz14"><span class="dark-color me-2">4.82</span>94 reviews</p>
                        </div>
                        <hr class="my-2">
                        <div class="list-meta d-flex justify-content-between align-items-center mt15">
                        <a class="d-flex" href="#">
                            <span class="position-relative mr10">
                            <img class="rounded-circle wa" src="{{ asset('images/team/fl-s-2.png') }}" alt="Freelancer Photo">
                            <span class="online-badges"></span>
                            </span>
                            <span class="fz14">Ali Tufan</span>
                        </a>
                        <div class="budget">
                            <p class="mb-0 body-color">Starting at<span class="fz17 fw500 dark-color ms-1">$983</span></p>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="listing-style1">
                    <div class="list-thumb">
                        <img class="w-100" src="{{ asset('images/listings/g-3.jpg') }}" alt="">
                        <a href="#" class="tag-del" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Delete Item" aria-label="Delete Item"><span class="flaticon-delete"></span></a>
                    </div>
                    <div class="list-content">
                        <p class="list-text body-color fz14 mb-1">Blood sugar level</p>
                        <h5 class="list-title line-clamp2"><a href="page-services-single.html">Taking control of blood sugar, a must.</a></h5>
                        <div class="review-meta d-flex align-items-center">
                        <i class="fas fa-star fz10 review-color me-2"></i>
                        <p class="mb-0 body-color fz14"><span class="dark-color me-2">4.82</span>94 reviews</p>
                        </div>
                        <hr class="my-2">
                        <div class="list-meta d-flex justify-content-between align-items-center mt15">
                        <a class="d-flex" href="#">
                            <span class="position-relative mr10">
                            <img class="rounded-circle" src="{{ asset('images/team/fl-s-3.png') }}" alt="Freelancer Photo">
                            <span class="online-badges"></span>
                            </span>
                            <span class="fz14">Wanda Runo</span>
                        </a>
                        <div class="budget">
                            <p class="mb-0 body-color">Starting at<span class="fz17 fw500 dark-color ms-1">$983</span></p>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="listing-style1">
                    <div class="list-thumb">
                        <img class="w-100" src="{{ asset('images/listings/g-4.jpg') }}" alt="">
                        <a href="#" class="tag-del" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Delete Item" aria-label="Delete Item"><span class="flaticon-delete"></span></a>
                    </div>
                    <div class="list-content">
                        <p class="list-text body-color fz14 mb-1">Diabetes Mellitus</p>
                        <h5 class="list-title line-clamp2"><a href="page-services-single.html">A non negotiable state of diabetes</a></h5>
                        <div class="review-meta d-flex align-items-center">
                        <i class="fas fa-star fz10 review-color me-2"></i>
                        <p class="mb-0 body-color fz14"><span class="dark-color me-2">4.82</span>94 reviews</p>
                        </div>
                        <hr class="my-2">
                        <div class="list-meta d-flex justify-content-between align-items-center mt15">
                        <a class="d-flex" href="#">
                            <span class="position-relative mr10">
                            <img class="rounded-circle" src="{{ asset('images/team/fl-s-4.png') }}" alt="Freelancer Photo">
                            <span class="online-badges"></span>
                            </span>
                            <span class="fz14">Wanda Runo</span>
                        </a>
                        <div class="budget">
                            <p class="mb-0 body-color">Starting at<span class="fz17 fw500 dark-color ms-1">$983</span></p>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="listing-style1">
                    <div class="list-thumb">
                        <img class="w-100" src="{{ asset('images/listings/g-1.jpg') }}" alt="">
                        <a href="#" class="tag-del" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Delete Item" aria-label="Delete Item"><span class="flaticon-delete"></span></a>
                    </div>
                    <div class="list-content">
                        <p class="list-text body-color fz14 mb-1">Diabetes Mellitus</p>
                        <h5 class="list-title"><a href="page-services-single.html">The negative effect of diabetes</a></h5>
                        <div class="review-meta d-flex align-items-center">
                        <i class="fas fa-star fz10 review-color me-2"></i>
                        <p class="mb-0 body-color fz14"><span class="dark-color me-2">4.82</span>94 reviews</p>
                        </div>
                        <hr class="my-2">
                        <div class="list-meta d-flex justify-content-between align-items-center mt15">
                        <a class="d-flex" href="#">
                            <span class="position-relative mr10">
                            <img class="rounded-circle wa" src="{{ asset('images/team/fl-s-1.png') }}" alt="Freelancer Photo">
                            <span class="online-badges"></span>
                            </span>
                            <span class="fz14">Wanda Runo</span>
                        </a>
                        <div class="budget">
                            <p class="mb-0 body-color">Starting at<span class="fz17 fw500 dark-color ms-1">$983</span></p>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="listing-style1">
                    <div class="list-thumb">
                        <img class="w-100" src="{{ asset('images/listings/g-2.jpg') }}" alt="">
                        <a href="#" class="tag-del" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Delete Item" aria-label="Delete Item"><span class="flaticon-delete"></span></a>
                    </div>
                    <div class="list-content">
                        <p class="list-text body-color fz14 mb-1">Symptoms and early Signs</p>
                        <h5 class="list-title"><a href="page-services-single.html">There is need to be aware of the early stage of diabetes</a></h5>
                        <div class="review-meta d-flex align-items-center">
                        <i class="fas fa-star fz10 review-color me-2"></i>
                        <p class="mb-0 body-color fz14"><span class="dark-color me-2">4.82</span>94 reviews</p>
                        </div>
                        <hr class="my-2">
                        <div class="list-meta d-flex justify-content-between align-items-center mt15">
                        <a class="d-flex" href="#">
                            <span class="position-relative mr10">
                            <img class="rounded-circle wa" src="{{ asset('images/team/fl-s-2.png') }}" alt="Freelancer Photo">
                            <span class="online-badges"></span>
                            </span>
                            <span class="fz14">Ali Tufan</span>
                        </a>
                        <div class="budget">
                            <p class="mb-0 body-color">Starting at<span class="fz17 fw500 dark-color ms-1">$983</span></p>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="listing-style1">
                    <div class="list-thumb">
                        <img class="w-100" src="{{ asset('images/listings/g-3.jpg') }}" alt="">
                        <a href="#" class="tag-del" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Delete Item" aria-label="Delete Item"><span class="flaticon-delete"></span></a>
                    </div>
                    <div class="list-content">
                        <p class="list-text body-color fz14 mb-1">Blood sugar level</p>
                        <h5 class="list-title line-clamp2"><a href="page-services-single.html">Taking control of blood sugar, a must.</a></h5>
                        <div class="review-meta d-flex align-items-center">
                        <i class="fas fa-star fz10 review-color me-2"></i>
                        <p class="mb-0 body-color fz14"><span class="dark-color me-2">4.82</span>94 reviews</p>
                        </div>
                        <hr class="my-2">
                        <div class="list-meta d-flex justify-content-between align-items-center mt15">
                        <a class="d-flex" href="#">
                            <span class="position-relative mr10">
                            <img class="rounded-circle" src="{{ asset('images/team/fl-s-3.png') }}" alt="Freelancer Photo">
                            <span class="online-badges"></span>
                            </span>
                            <span class="fz14">Wanda Runo</span>
                        </a>
                        <div class="budget">
                            <p class="mb-0 body-color">Starting at<span class="fz17 fw500 dark-color ms-1">$983</span></p>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="listing-style1">
                    <div class="list-thumb">
                        <img class="w-100" src="{{ asset('images/listings/g-4.jpg') }}" alt="">
                        <a href="#" class="tag-del" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Delete Item" aria-label="Delete Item"><span class="flaticon-delete text-thm2"></span></a>
                    </div>
                    <div class="list-content">
                        <p class="list-text body-color fz14 mb-1">Diabetes Mellitus</p>
                        <h5 class="list-title line-clamp2"><a href="page-services-single.html">A non negotiable state of diabetes</a></h5>
                        <div class="review-meta d-flex align-items-center">
                        <i class="fas fa-star fz10 review-color me-2"></i>
                        <p class="mb-0 body-color fz14"><span class="dark-color me-2">4.82</span>94 reviews</p>
                        </div>
                        <hr class="my-2">
                        <div class="list-meta d-flex justify-content-between align-items-center mt15">
                        <a class="d-flex" href="#">
                            <span class="position-relative mr10">
                            <img class="rounded-circle" src="{{ asset('images/team/fl-s-4.png') }}" alt="Freelancer Photo">
                            <span class="online-badges"></span>
                            </span>
                            <span class="fz14">Wanda Runo</span>
                        </a>
                        <div class="budget">
                            <p class="mb-0 body-color">Starting at<span class="fz17 fw500 dark-color ms-1">$983</span></p>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>

@endsection
