@extends('layouts.app')
@section('dashboard')
<div class="col-lg-12 d-md-flex">
    <div class="dashboard_title_area">
      <h2>Health Plan</h2>
      <p class="text">See what it feels to have a nice health plan that works for you.</p>
    </div>
    <div class="col-lg-6">
      <div class="text-lg-end">
        <a href="{{ route('health.create') }}" class="ud-btn btn-dark default-box-shadow2">New Plan<i class="fal fa-arrow-right-long"></i></a>
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
                <th scope="col">Plan Date</th>
                <th scope="col">Title of plan</th>
                <th scope="col">Ends</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody class="t-body">
              <tr>
                <th scope="row">

                  April 9, 2024
                </th>
                <td class="vam">Run 400 meters long every morning</td>
                <td class="vam">April 9, 2023</td>
                <td class="vam"><span class="pending-style style1">In Progress</span></td>
                <td class="vam">
                  <a href="#" class="table-action fz15 fw500 text-thm2" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><span class="flaticon-website me-2 vam"></span> View</a>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  April 9, 2023
                </th>
                <td class="vam">drink 4 cups of water every morning</td>
                <td class="vam">April 9, 2023</td>
                <td class="vam"><span class="pending-style style2">Completed</span></td>
                <td class="vam">
                  <a href="#" class="table-action fz15 fw500 text-thm2" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><span class="flaticon-website me-2 vam"></span> View</a>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  April 9, 2023
                </th>
                <td class="vam">Check my wait in the morning</td>
                <td class="vam">April 9, 2023</td>
                <td class="vam"><span class="pending-style style2">Completed</span></td>
                <td class="vam">
                  <a href="#" class="table-action fz15 fw500 text-thm2" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><span class="flaticon-website me-2 vam"></span> View</a>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  April 9, 2023
                </th>
                <td class="vam">Calculate my BMI</td>
                <td class="vam">April 9, 2023</td>
                <td class="vam"><span class="pending-style style3">Cancel</span></td>
                <td class="vam">
                  <a href="#" class="table-action fz15 fw500 text-thm2" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><span class="flaticon-website me-2 vam"></span> View</a>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  April 9, 2023
                </th>
                <td class="vam">drink 4 cups of water every morning</td>
                <td class="vam">April 9, 2023</td>
                <td class="vam"><span class="pending-style style3">Cancel</span></td>
                <td class="vam">
                  <a href="#" class="table-action fz15 fw500 text-thm2" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><span class="flaticon-website me-2 vam"></span> View</a>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  April 9, 2023
                </th>
                <td class="vam">drink 4 cups of water every morning</td>
                <td class="vam">April 9, 2023</td>
                <td class="vam"><span class="pending-style style2">Completed</span></td>
                <td class="vam">
                  <a href="#" class="table-action fz15 fw500 text-thm2" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><span class="flaticon-website me-2 vam"></span> View</a>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  April 9, 2023
                </th>
                <td class="vam">drink 4 cups of water every morning</td>
                <td class="vam">April 9, 2023</td>
                <td class="vam"><span class="pending-style style2">Completed</span></td>
                <td class="vam">
                  <a href="#" class="table-action fz15 fw500 text-thm2" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><span class="flaticon-website me-2 vam"></span> View</a>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  April 9, 2023
                </th>
                <td class="vam">drink 4 cups of water every morning</td>
                <td class="vam">April 9, 2023</td>
                <td class="vam"><span class="pending-style style1">In Progress</span></td>
                <td class="vam">
                  <a href="#" class="table-action fz15 fw500 text-thm2" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><span class="flaticon-website me-2 vam"></span> View</a>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  April 9, 2023
                </th>
                <td class="vam">drink 4 cups of water every morning</td>
                <td class="vam">April 9, 2023</td>
                <td class="vam"><span class="pending-style style3">Cancel</span></td>
                <td class="vam">
                  <a href="#" class="table-action fz15 fw500 text-thm2" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><span class="flaticon-website me-2 vam"></span> View</a>
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
