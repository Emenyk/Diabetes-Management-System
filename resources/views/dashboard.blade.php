@extends('layouts.app')
@section('dashboard')
<div class="col-lg-12">
    <div class="dashboard_title_area">
      <h2>{{ $dashboard ?? 'dashboard' }}</h2>
      <p class="text">{{ $statement ?? 'for recent activities display and quick actions' }}.</p>
    </div>
</div>
@endsection
@section('content')



<div class="row">
    <div class="col-sm-6 col-xxl-3">
      <div class="d-flex align-items-center justify-content-between statistics_funfact">
        <div class="details">
          <div class="fz15">Educational Material</div>
          <div class="title">25</div>
          <div class="text fz14"><span class="text-thm">10</span> Available</div>
        </div>
        <div class="icon text-center"><i class="flaticon-contract"></i></div>
      </div>
    </div>
    <div class="col-sm-6 col-xxl-3">
      <div class="d-flex align-items-center justify-content-between statistics_funfact">
        <div class="details">
          <div class="fz15">Meal Plans</div>
          <div class="title">1292</div>
          <div class="text fz14"><span class="text-thm">80+</span> Completed</div>
        </div>
        <div class="icon text-center"><i class="flaticon-success"></i></div>
      </div>
    </div>
    <div class="col-sm-6 col-xxl-3">
      <div class="d-flex align-items-center justify-content-between statistics_funfact">
        <div class="details">
          <div class="fz15">Set Medications</div>
          <div class="title">182</div>
          <div class="text fz14"><span class="text-thm">35+</span>Completed</div>
        </div>
        <div class="icon text-center"><i class="flaticon-review"></i></div>
      </div>
    </div>
    <div class="col-sm-6 col-xxl-3">
      <div class="d-flex align-items-center justify-content-between statistics_funfact">
        <div class="details">
          <div class="fz15">Total Activities</div>
          <div class="title">22,786</div>
          <div class="text fz14"><span class="text-thm">290+</span>For the month</div>
        </div>
        <div class="icon text-center"><i class="flaticon-review-1"></i></div>
      </div>
    </div>
  </div>


  <div class="row">
    <div class="col-xl-6">
      <div
        class="ps-widget bgc-white bdrs4 p30 mb30 overflow-hidden position-relative"
      >
        <div class="bdrb1 pb15 mb25">
          <h5 class="list-title">BMI Calculation</h5>
        </div>
        <div class="col-lg-7">
          <form id="bmi-form"class="form-style1">
            <div class="row">
              <div class="col-sm-6">
                <div class="mb20">
                  <label class="heading-color ff-heading fw500 mb10"
                    >Height (in meter)</label
                  >
                  <input type="number" id="height"
                  name="height"
                  class="form-control" />
                </div>
              </div>
              <div class="col-sm-6">
                <div class="mb20">
                  <label class="heading-color ff-heading fw500 mb10"
                    >Weight (in kg)</label
                  >
                  <input type="number"
                  id="weight"
                  name="weight"
                  class="form-control" />
                </div>
              </div>


              <div class="col-md-12">
                <div class="text-start">
                  <button type="submit" class="ud-btn btn-thm"
                    >Calculate BMI<i class="fal fa-arrow-right-long"></i
                  ></button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="col-xl-6">
      <div
        class="ps-widget bgc-white bdrs4 p30 mb30 overflow-hidden position-relative"
      >
        <div class="bdrb1 pb15 mb25">
          <h5 class="list-title">BMI Result</h5>
        </div>
        <div class="col-lg-7">
          <form class="form-style1">
              <div class="row">
                  <div class="col-sm-6">
                      <div class="mb20">
                          <label class="heading-color ff-heading fw500 mb10"
                          >Here is your Result</label
                          >
                          <div id="result" class="text-primary"></div>
                  <!-- <input type="date" class="form-control" /> -->
                </div>
              </div>

              <div class="col-md-12">
                <div class="mb10">
                  <label class="heading-color ff-heading fw500 mb10"
                    >Older Results</label
                  >
                  <ul>
                    <li>23 - 12 April 2024 - <span class="text-danger">over weight</span></li>
                    <li>19 - 5 April 2024 - <span class="text-success">average</span></li>
                    <li>20 - 29 March 2024 - <span class="text-success">average</span></li>
                  </ul>
                  <!-- <textarea
                    cols="30"
                    rows="6"
                    placeholder="Description"
                  ></textarea> -->
                </div>
              </div>
              <div class="col-md-12">

            </div>
          </form>
        </div>
      </div>
    </div>
  </div>


  <div class="row">
    <div class="col-md-6 col-xxl-4">
      <div class="ps-widget bgc-white bdrs4 p30 mb30 overflow-hidden position-relative">
        <div class="d-flex justify-content-between bdrb1 pb15 mb20">
          <h5 class="title">Most Viewed Materials</h5>
          <a class="text-decoration-underline text-thm6" href="#">View All</a>
        </div>
        <div class="dashboard-img-service">
          <div class="listing-style1 list-style d-block d-xl-flex align-items-center border-0 mb10">
            <div class="list-thumb flex-shrink-0 bdrs4">
              <img class="w-100" src="images/listings/g-1.jpg" alt="">
            </div>
            <div class="list-content flex-grow-1 pt10 pb10 pl15 pl0-lg">
              <h6 class="list-title mb-2"><a href="page-services-single.html">Over view of Diabetes</a></h6>
              <div class="list-meta d-flex justify-content-between align-items-center">
                <div class="review-meta d-flex align-items-center">
                  <i class="fas fa-star fz10 review-color me-2"></i>
                  <p class="mb-0 body-color fz14"><span class="dark-color me-2">4.82</span></p>
                </div>
                <div class="budget">
                  <p class="mb-0 body-color">Starting at<span class="fz17 fw500 dark-color ms-1">$983</span></p>
                </div>
              </div>
            </div>
          </div>
          <hr class="opacity-100 mt-0">
          <div class="listing-style1 list-style d-block d-xl-flex align-items-center border-0 mb10">
            <div class="list-thumb flex-shrink-0 bdrs4">
              <img class="w-100" src="images/listings/g-2.jpg" alt="">
            </div>
            <div class="list-content flex-grow-1 pt0 pb10 pl15 pl0-lg">
              <h6 class="list-title mb-2"><a href="page-services-single.html">Early symptoms of diabetes</a></h6>
              <div class="list-meta d-flex justify-content-between align-items-center">
                <div class="review-meta d-flex align-items-center">
                  <i class="fas fa-star fz10 review-color me-2"></i>
                  <p class="mb-0 body-color fz14"><span class="dark-color me-2">4.82</span></p>
                </div>
                <div class="budget">
                  <p class="mb-0 body-color">Starting at<span class="fz17 fw500 dark-color ms-1">$983</span></p>
                </div>
              </div>
            </div>
          </div>
          <hr class="opacity-100 mt-0">
          <div class="listing-style1 list-style d-block d-xl-flex align-items-center border-0 mb-0">
            <div class="list-thumb flex-shrink-0 bdrs4">
              <img class="w-100" src="images/listings/g-6.jpg" alt="">
            </div>
            <div class="list-content flex-grow-1 pt0 pb-0 pl15 pl0-lg pe-0">
              <h6 class="list-title mb-2"><a href="page-services-single.html">Early stage of diabetes</a></h6>
              <div class="list-meta d-flex justify-content-between align-items-center">
                <div class="review-meta d-flex align-items-center">
                  <i class="fas fa-star fz10 review-color me-2"></i>
                  <p class="mb-0 body-color fz14"><span class="dark-color me-2">4.82</span></p>
                </div>
                <div class="budget">
                  <p class="mb-0 body-color">Starting at<span class="fz17 fw500 dark-color ms-1">$983</span></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-xxl-4">
      <div class="ps-widget bgc-white bdrs4 p30 mb30 overflow-hidden position-relative">
        <div class="d-flex justify-content-between bdrb1 pb15 mb30">
          <h5 class="title">Active Plans</h5>
          <a class="text-decoration-underline text-thm6" href="#">View All</a>
        </div>
        <div class="dashboard-img-service">
          <div class="listing-style1 list-style d-block d-xl-flex align-items-start border-0 mb10">
            <div class="list-thumb wa flex-shrink-0 bdrs4 mb15-lg">
              <img class="wa img-2" src="images/team/client-1.png" alt="">
            </div>
            <div class="list-content flex-grow-1 py-0 pb10 pl15 pl0-lg">
              <h6 class="list-title mb-2">Nutritional Management: a comprehensive meal plan tailored to manage blood sugar.</h6>
              <div class="list-meta d-flex justify-content-between align-items-center">
                <div class="review-meta d-flex align-items-center">
                  <p class="mb-0 body-color fz14">February 26, 2021</p>
                </div>
                <div class="budget">
                  <p class="mb-0"><span class="fz15 fw500 dark-color">$983</span></p>
                </div>
              </div>
            </div>
          </div>
          <hr class="opacity-100 mt-0">
          <div class="listing-style1 list-style d-block d-xl-flex align-items-start border-0 mb10 mt20">
            <div class="list-thumb wa flex-shrink-0 bdrs4 mb15-lg">
              <img class="wa img-2" src="images/team/client-3.png" alt="">
            </div>
            <div class="list-content flex-grow-1 py-0 pb10 pl15 pl0-lg">
              <h6 class="list-title mb-2">Physical Activity and Exercise Routine: a personalized exercise </h6>
              <div class="list-meta d-flex justify-content-between align-items-center">
                <div class="review-meta d-flex align-items-center">
                  <p class="mb-0 body-color fz14">February 26, 2021</p>
                </div>
                <div class="budget">
                  <p class="mb-0"><span class="fz15 fw500 dark-color">$983</span></p>
                </div>
              </div>
            </div>
          </div>
          <hr class="opacity-100 mt-0">
          <div class="listing-style1 list-style d-block d-xl-flex align-items-start border-0 mb-0 mt20">
            <div class="list-thumb wa flex-shrink-0 bdrs4 mb15-lg">
              <img class="wa img-2" src="images/team/client-6.png" alt="">
            </div>
            <div class="list-content flex-grow-1 py-0 pl15 pl0-lg">
              <h6 class="list-title mb-2">Medication Adherence and Monitoring: to prescribed medication regimens </h6>
              <div class="list-meta d-flex justify-content-between align-items-center">
                <div class="review-meta d-flex align-items-center">
                  <p class="mb-0 body-color fz14">February 26, 2021</p>
                </div>
                <div class="budget">
                  <p class="mb-0"><span class="fz15 fw500 dark-color">$983</span></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-xxl-4">
      <div class="ps-widget bgc-white bdrs4 p30 mb30 overflow-hidden position-relative">
        <div class="bdrb1 pb15 mb30">
          <h5 class="title">Active Reminders</h5>
        </div>
        <div class="dashboard-timeline-label">
          <div class="timeline-item pb15">
            <!--begin::Label-->
            <div class="child-timeline-label">08:42</div>
            <!--end::Label-->
            <!--begin::Badge-->
            <div class="timeline-badge d-flex align-items-center">
              <i class="fas fa-genderless"></i>
            </div>
            <!--end::Badge-->
            <!--begin::Text-->
            <div class="ra_pcontent pl10"><span class="title">Metformin:</span> <br> <span class="subtitle">medication for type 2 diabetes</span></div>
            <!--end::Text-->
          </div>
        </div>
        <div class="dashboard-timeline-label">
          <div class="timeline-item pb15">
            <!--begin::Label-->
            <div class="child-timeline-label">14:37</div>
            <!--end::Label-->
            <!--begin::Badge-->
            <div class="timeline-badge d-flex align-items-center color3">
              <i class="fas fa-genderless"></i>
            </div>
            <!--end::Badge-->
            <!--begin::Text-->
            <div class="ra_pcontent pl10">
              <span class="title">Insulin: <span class="text-thm6 fw500">insulin, including rapid-acting,</span>
            </div>
            <!--end::Text-->
          </div>
        </div>
        <div class="dashboard-timeline-label">
          <div class="timeline-item pb0">
            <!--begin::Label-->
            <div class="child-timeline-label">16:50</div>
            <!--end::Label-->
            <!--begin::Badge-->
            <div class="timeline-badge d-flex align-items-center color4">
              <i class="fas fa-genderless"></i>
            </div>
            <!--end::Badge-->
            <!--begin::Text-->
            <div class="ra_pcontent pl10"><span class="title">Sulfonylureas: </span> <br> <span class="subtitle"> glipizide, glyburide, and glimepiride.</span></div>
            <!--end::Text-->
          </div>
        </div>
        <div class="dashboard-timeline-label">
          <div class="timeline-item pb10">
            <!--begin::Label-->
            <div class="child-timeline-label">21:03</div>
            <!--end::Label-->
            <!--begin::Badge-->
            <div class="timeline-badge d-flex align-items-center color5">
              <i class="fas fa-genderless"></i>
            </div>
            <!--end::Badge-->
            <!--begin::Text-->
            <div class="ra_pcontent pl10"><span class="title">DPP-4 Inhibitors:</span> <br> <span class="subtitle">dipeptidyl peptidase-4 (DPP-4).</span></div>
            <!--end::Text-->
          </div>
        </div>
        <div class="dashboard-timeline-label before-none mb30">
          <div class="timeline-item">
            <!--begin::Label-->
            <div class="child-timeline-label">23:07</div>
            <!--end::Label-->
            <!--begin::Badge-->
            <div class="timeline-badge d-flex align-items-center color6">
              <i class="fas fa-genderless"></i>
            </div>
            <!--end::Badge-->
            <!--begin::Text-->
            <div class="ra_pcontent pl10"><span class="title">SGLT2 Inhibitors:</span> <br> <span class="subtitle">sodium-glucose cotransporter-2 (SGLT2) .</span></div>
            <!--end::Text-->
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    document.getElementById('bmi-form').addEventListener('submit', function(event) {
        event.preventDefault();

        var weight = document.getElementById('weight').value;
        var height = document.getElementById('height').value;

        var bmi = weight / (height / 100 * height / 100);

        document.getElementById('result').innerHTML = 'Your BMI is: ' + bmi;
    });
</script>


@endsection


