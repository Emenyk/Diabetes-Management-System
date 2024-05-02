@extends('layouts.app')
@section('dashboard')
<div class="col-lg-12 d-md-flex">
    <div class="dashboard_title_area">
      <h2>All Meal Plans</h2>
      <p class="text">Always remeber to drink water steadly.</p>
    </div>
    <div class="col-lg-6">
      <div class="text-lg-end">
        <a href="createMealPlan.html" class="ud-btn btn-dark default-box-shadow2">New Plan<i class="fal fa-arrow-right-long"></i></a>
      </div>
    </div>
  </div>

@endsection
@section('content')
<div class="row">
    <div class="col-xl-12">
      <div class="ps-widget bgc-white bdrs4 p30 mb30 overflow-hidden position-relative">
        <div class="packages_table table-responsive">
          <table class="table-style3 table at-savesearch">
            <thead class="t-head">
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Meal Type</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody class="t-body">
              <tr>
                <th class="ps-0" scope="row">
                  <div class="freelancer-style1 p-0 mb-0 box-shadow-none">
                    <div class="d-lg-flex align-items-lg-center">
                      <div class="thumb w60 position-relative rounded-circle mb15-md">
                        <img class="rounded-circle mx-auto" src="images/team/client-1.png" alt="">
                        <span class="online-badge2"></span>
                      </div>
                      <div class="details ml15 ml0-md mb15-md">
                        <h5 class="title mb-2">Breakfast with vegetables, goundnut, coconut</h5>

                        <p class="mb-0 fz14 list-inline-item mb5-sm pe-1"><i class="flaticon-30-days fz16 vam text-thm2 me-1 bdrl1 pl15 pl0-xs bdrn-xs"></i> April 01, 2023</p>
                        <!-- <p class="mb-0 fz14 list-inline-item mb5-sm"><i class="flaticon-contract fz16 vam text-thm2 me-1 bdrl1 pl15 pl0-xs bdrn-xs"></i> 1 Received</p> -->
                      </div>
                    </div>
                  </div>
                </th>
                <td class="vam"><h5 class="mb-0">Afternoon</span></h5></td>
                <td>
                  <div class="d-flex">
                    <a href="#" class="icon me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="flaticon-pencil"></span></a>
                    <a href="#" class="icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="flaticon-delete"></span></a>
                  </div>
                </td>
              </tr>
              <tr>
                <th class="ps-0" scope="row">
                  <div class="freelancer-style1 p-0 mb-0 box-shadow-none">
                    <div class="d-lg-flex align-items-lg-center">
                      <div class="thumb w60 position-relative rounded-circle mb15-md">
                        <img class="rounded-circle mx-auto" src="images/team/client-2.png" alt="">
                      </div>
                      <div class="details ml15 ml0-md mb15-md">
                        <h5 class="title mb-2">bitter leaf soup</h5>

                        <p class="mb-0 fz14 list-inline-item mb5-sm pe-1"><i class="flaticon-30-days fz16 vam text-thm2 me-1 bdrl1 pl15 pl0-xs bdrn-xs"></i> April 01, 2023</p>
                        <!-- <p class="mb-0 fz14 list-inline-item mb5-sm"><i class="flaticon-contract fz16 vam text-thm2 me-1 bdrl1 pl15 pl0-xs bdrn-xs"></i> 1 Received</p> -->
                      </div>
                    </div>
                  </div>
                </th>
                <td><h5>Night</span></h5></td>
                <td>
                  <div class="d-flex">
                    <a href="#" class="icon me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="flaticon-pencil"></span></a>
                    <a href="#" class="icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="flaticon-delete"></span></a>
                  </div>
                </td>
              </tr>
              <tr>
                <th class="ps-0" scope="row">
                  <div class="freelancer-style1 p-0 mb-0 box-shadow-none">
                    <div class="d-lg-flex align-items-lg-center">
                      <div class="thumb w60 position-relative rounded-circle mb15-md">
                        <img class="rounded-circle mx-auto" src="images/team/client-3.png" alt="">
                      </div>
                      <div class="details ml15 ml0-md mb15-md">
                        <h5 class="title mb-2">cucmber and gallic</h5>

                        <p class="mb-0 fz14 list-inline-item mb5-sm pe-1"><i class="flaticon-30-days fz16 vam text-thm2 me-1 bdrl1 pl15 pl0-xs bdrn-xs"></i> April 01, 2023</p>
                        <!-- <p class="mb-0 fz14 list-inline-item mb5-sm"><i class="flaticon-contract fz16 vam text-thm2 me-1 bdrl1 pl15 pl0-xs bdrn-xs"></i> 1 Received</p> -->
                      </div>
                    </div>
                  </div>
                </th>
                <td><h5>Noon</span></h5></td>
                <td>
                  <div class="d-flex">
                    <a href="#" class="icon me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="flaticon-pencil"></span></a>
                    <a href="#" class="icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="flaticon-delete"></span></a>
                  </div>
                </td>
              </tr>
              <tr>
                <th class="ps-0" scope="row">
                  <div class="freelancer-style1 p-0 mb-0 box-shadow-none">
                    <div class="d-lg-flex align-items-lg-center">
                      <div class="thumb w60 position-relative rounded-circle mb15-md">
                        <img class="rounded-circle mx-auto" src="images/team/client-4.png" alt="">
                      </div>
                      <div class="details ml15 ml0-md mb15-md">
                        <h5 class="title mb-2">Potato, bitter-lemon, groundnut</h5>

                        <p class="mb-0 fz14 list-inline-item mb5-sm pe-1"><i class="flaticon-30-days fz16 vam text-thm2 me-1 bdrl1 pl15 pl0-xs bdrn-xs"></i> April 01, 2023</p>
                        <!-- <p class="mb-0 fz14 list-inline-item mb5-sm"><i class="flaticon-contract fz16 vam text-thm2 me-1 bdrl1 pl15 pl0-xs bdrn-xs"></i> 1 Received</p> -->
                      </div>
                    </div>
                  </div>
                </th>
                <td><h5>Evening</span></h5></td>
                <td>
                  <div class="d-flex">
                    <a href="#" class="icon me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="flaticon-pencil"></span></a>
                    <a href="#" class="icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="flaticon-delete"></span></a>
                  </div>
                </td>
              </tr>
              <tr>
                <th class="ps-0" scope="row">
                  <div class="freelancer-style1 p-0 mb-0 box-shadow-none">
                    <div class="d-lg-flex align-items-lg-center">
                      <div class="thumb w60 position-relative rounded-circle mb15-md">
                        <img class="rounded-circle mx-auto" src="images/team/client-5.png" alt="">
                      </div>
                      <div class="details ml15 ml0-md mb15-md">
                        <h5 class="title mb-2">Mango, pumpkin and guava</h5>

                        <p class="mb-0 fz14 list-inline-item mb5-sm pe-1"><i class="flaticon-30-days fz16 vam text-thm2 me-1 bdrl1 pl15 pl0-xs bdrn-xs"></i> April 01, 2023</p>
                        <!-- <p class="mb-0 fz14 list-inline-item mb5-sm"><i class="flaticon-contract fz16 vam text-thm2 me-1 bdrl1 pl15 pl0-xs bdrn-xs"></i> 1 Received</p> -->
                      </div>
                    </div>
                  </div>
                </th>
                <td><h5>Mid-Morning</span></h5></td>
                <td>
                  <div class="d-flex">
                    <a href="#" class="icon me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="flaticon-pencil"></span></a>
                    <a href="#" class="icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="flaticon-delete"></span></a>
                  </div>
                </td>
              </tr>
              <tr>
                <th class="ps-0" scope="row">
                  <div class="freelancer-style1 p-0 mb-0 box-shadow-none">
                    <div class="d-lg-flex align-items-lg-center">
                      <div class="thumb w60 position-relative rounded-circle mb15-md">
                        <img class="rounded-circle mx-auto" src="images/team/client-6.png" alt="">
                      </div>
                      <div class="details ml15 ml0-md mb15-md">
                        <h5 class="title mb-2">Looking for team members for web agency</h5>

                        <p class="mb-0 fz14 list-inline-item mb5-sm pe-1"><i class="flaticon-30-days fz16 vam text-thm2 me-1 bdrl1 pl15 pl0-xs bdrn-xs"></i> April 01, 2023</p>
                        <!-- <p class="mb-0 fz14 list-inline-item mb5-sm"><i class="flaticon-contract fz16 vam text-thm2 me-1 bdrl1 pl15 pl0-xs bdrn-xs"></i> 1 Received</p> -->
                      </div>
                    </div>
                  </div>
                </th>
                <td><h5>Afternoon</span></h5></td>
                <td>
                  <div class="d-flex">
                    <a href="#" class="icon me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="flaticon-pencil"></span></a>
                    <a href="#" class="icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="flaticon-delete"></span></a>
                  </div>
                </td>
              </tr>
              <tr>
                <th class="ps-0" scope="row">
                  <div class="freelancer-style1 p-0 mb-0 box-shadow-none">
                    <div class="d-lg-flex align-items-lg-center">
                      <div class="thumb w60 position-relative rounded-circle mb15-md">
                        <img class="rounded-circle mx-auto" src="images/team/client-7.png" alt="">
                      </div>
                      <div class="details ml15 ml0-md mb15-md">
                        <h5 class="title mb-2">Breakfast with vegetables, goundnut, coconut</h5>

                        <p class="mb-0 fz14 list-inline-item mb5-sm pe-1"><i class="flaticon-30-days fz16 vam text-thm2 me-1 bdrl1 pl15 pl0-xs bdrn-xs"></i> April 01, 2023</p>
                        <!-- <p class="mb-0 fz14 list-inline-item mb5-sm"><i class="flaticon-contract fz16 vam text-thm2 me-1 bdrl1 pl15 pl0-xs bdrn-xs"></i> 1 Received</p> -->
                      </div>
                    </div>
                  </div>
                </th>
                <td><h5>Breakfast</h5></td>
                <td>
                  <div class="d-flex">
                    <a href="#" class="icon me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="flaticon-pencil"></span></a>
                    <a href="#" class="icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="flaticon-delete"></span></a>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
          <div class="mbp_pagination text-center mt30">
            <ul class="page_navigation">
              <li class="page-item">
                <a class="page-link" href="#"> <span class="fas fa-angle-left"></span></a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item active" aria-current="page">
                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
              </li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">4</a></li>
              <li class="page-item"><a class="page-link" href="#">5</a></li>
              <li class="page-item"><a class="page-link" href="#">...</a></li>
              <li class="page-item"><a class="page-link" href="#">20</a></li>
              <li class="page-item">
                <a class="page-link" href="#"><span class="fas fa-angle-right"></span></a>
              </li>
            </ul>
            <p class="mt10 mb-0 pagination_page_count text-center">1 – 20 of 300+ property available</p>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
