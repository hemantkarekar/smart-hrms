<div class="page-content">
  <div class="">
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Holy guacamole!</strong> Your Leave Request for <strong>24th June 2024</strong> has been Approved!!!
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Holy guacamole!</strong> Your Leave Request for <strong>24th June 2024</strong> has been Approved!!!
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  </div>

  <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
    <div>
      <h4 class="mb-3 mb-md-0">Welcome to the Basic Dashboard</h4>
    </div>
    <div class="">
      <?= form_open() ?>
      <div class="row">
        <div class="col-auto">
          <select name="" id="select2Period" class="form-control-sm">
            <option value="">-- Select Duration --</option>
            <option value="">Today</option>
            <option value="">Last Month</option>
            <option value="">Quarterly</option>
          </select>
          <script>
            $("#select2Period").select2({
              theme: "bootstrap-5",
            });
          </script>
        </div>
        <div class="col-auto">
          <button type="submit" class="btn btn-primary btn-icon-text"><i data-feather="filter" class="icon-sm mb-1 btn-icon-prepend"></i>Filter Data</button>
        </div>
      </div>
      <?= form_close() ?>
    </div>
  </div>

  <div class="row">
    <div class="col-md-4 grid-margin">
      <div class="row flex-grow-1">
        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="row m-0 h-100 align-items-center">
                <div class="col-12">
                  <div class="d-flex gap-2 justify-content-between">
                    <div class="">
                      <div class="mb-3">
                        <h4 class="mb-1">Welcome Back, Hemant!</h4>
                        <p class="tx-18">You have <a href=""><u>4 meetings</u></a> today,</p>
                      </div>
                      <a href="" class="btn btn-primary btn-icon-text">View Profile<i data-feather="arrow-right" class="icon-sm mb-1 btn-icon-append"></i></a>
                    </div>
                    <div class="">
                      <img class="wd-50 ht-50 rounded-circle" src="https://ui-avatars.com/api/?name=Hemant+Karekar" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-baseline mb-2">
                <h6 class="card-title mb-0">Statistics</h6>
              </div>
              <div class="bg-light p-3 mb-2">
                <div class="row justify-content-between align-items-center">
                  <div class="col-auto">
                    Work Time
                    <h5>6 Hrs : 54 Min</h5>
                  </div>
                  <div class="col-auto">
                    <a href="" class="btn btn-primary btn-icon-text">Clock In<i data-feather="play" class="icon-sm mb-1 btn-icon-append"></i></a>
                  </div>
                </div>
              </div>
              <div class="row flex-grow-1 mb-3">
                <div class="col-xl-6 col-12">
                  <div class="card">
                    <div class="card-body p-2">
                      Work Time
                      <h5>6 Hrs : 54 Min</h5>
                    </div>
                  </div>
                </div>
                <div class="col-xl-6 col-12">
                  <div class="card">
                    <div class="card-body p-2">
                      Work Time
                      <h5>6 Hrs : 54 Min</h5>
                    </div>
                  </div>
                </div>
              </div>
              <hr>
              <div>
                <a class="btn p-0 btn-icon-text text-dark link-text" href="">View Attendance<i data-feather="arrow-right" class="icon-sm mb-1 btn-icon-append"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="row m-0 h-100 align-items-center">
                <div class="col-12">
                  <div class="">
                    <div class="mb-3">
                      <h4 class="mb-1">Upcoming Holiday</h4>
                    </div>
                  </div>
                  <div class="row justify-content-between">
                    <div class="col-lg-auto col-12">
                      <div class="btn btn-primary text-white p-2"><i data-feather="calendar" class="h1"></i></div>
                    </div>
                    <div class="col-lg col-12">
                      <h5>Lorem, ipsum dolor.</h5>
                      <p>(<?= date('F j, Y') ?>)</p>
                    </div>
                    <div class="col-lg-auto col-12">
                      <a href="" class="btn btn-primary btn-icon-text">View All<i data-feather="arrow-right" class="icon-sm mb-1 btn-icon-append"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 grid-margin">
      <div class="row">
        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-baseline mb-3">
                <h6 class="card-title mb-0">Attendance & Leaves</h6>
                <div>
                </div>
              </div>
              <div class="row g-3 mb-3">
                <div class="col-xl-4 col-12">
                  <div class="">
                    <h3 class="text-primary">90</h3>
                    <p>Lorem, ipsum dolor.</p>
                  </div>
                </div>
                <div class="col-xl-4 col-12">
                  <div class="">
                    <h3 class="text-primary">90</h3>
                    <p>Lorem, ipsum dolor.</p>
                  </div>
                </div>
                <div class="col-xl-4 col-12">
                  <div class="">
                    <h3 class="text-primary">90</h3>
                    <p>Lorem, ipsum dolor.</p>
                  </div>
                </div>
                <div class="col-xl-4 col-12">
                  <div class="">
                    <h3 class="text-primary">90</h3>
                    <p>Lorem, ipsum dolor.</p>
                  </div>
                </div>
                <div class="col-xl-4 col-12">
                  <div class="">
                    <h3 class="text-primary">90</h3>
                    <p>Lorem, ipsum dolor.</p>
                  </div>
                </div>
                <div class="col-xl-4 col-12">
                  <div class="">
                    <h3 class="text-primary">90</h3>
                    <p>Lorem, ipsum dolor.</p>
                  </div>
                </div>
              </div>
              <div>
                <a class="btn btn-primary btn-icon-text" href="">Apply for a Leave<i data-feather="arrow-right" class="icon-sm mb-1 btn-icon-append"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-baseline mb-2">
                <h6 class="card-title mb-0">Working Hours</h6>
              </div>
              <div class="" style="height: 200px;"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 grid-margin">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-baseline mb-3">
            <h6 class="card-title mb-0">Important</h6>
            <a class="btn p-0 btn-icon-text text-dark link-text" href="">View All<i data-feather="arrow-right" class="icon-sm mb-1 btn-icon-append"></i></a>
          </div>
          <hr>
          <div class="row">
            <?php for ($i = 0; $i < 6; $i++) : ?>
              <a href="" class="col-12 mb-3">
                <div class="card">
                  <div class="card-body py-3">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <div class="rounded-circle overflow-hidden">
                          <img src="https://ui-avatars.com/api/?name=Vivek+Bandal" alt="" height="40">
                        </div>
                      </div>
                      <div class="col">
                        <h5>Lorem ipsum dolor sit.</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            <?php endfor ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- row -->

  <div class="row">
    <div class="col-lg-6 grid-margin">
      <div class="card">
        <div class="card-body"></div>
      </div>
    </div>
    <div class="col-lg-6 grid-margin">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between mb-3">
            <h4 class="card-title">Company Policies</h4>
          </div>
          <div class="swiper" id="companyPoliciesSwiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="alert alert-primary">
                  <div class="row">
                    <div class="col-12 mb-3">
                      <div class="row align-items-center">
                        <div class="col-auto"><img class="wd-50 ht-50 rounded-circle" src="https://ui-avatars.com/api/?name=H+R" alt=""></div>
                        <div class="col">
                          <h4>HR Policy</h4>
                        </div>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="row align-items-center">
                        <div class="col">
                          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi, quae.</p>
                        </div>
                        <div class="col-auto">
                          <div class="d-flex gap-2">
                            <a class="btn p-0 btn-icon-text" href=""><i data-feather="download" class="icon-sm mb-1"></i></a>
                            <a class="btn p-0 btn-icon-text" href=""><i data-feather="eye" class="icon-sm mb-1"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="alert alert-primary">
                  <div class="row">
                    <div class="col-12 mb-3">
                      <div class="row align-items-center">
                        <div class="col-auto"><img class="wd-50 ht-50 rounded-circle" src="https://ui-avatars.com/api/?name=Employee+Policy" alt=""></div>
                        <div class="col">
                          <h4>Employee Policy</h4>
                        </div>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="row align-items-center">
                        <div class="col">
                          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi, quae.</p>
                        </div>
                        <div class="col-auto">
                          <div class="d-flex gap-2">
                            <a class="btn p-0 btn-icon-text" href=""><i data-feather="download" class="icon-sm mb-1"></i></a>
                            <a class="btn p-0 btn-icon-text" href=""><i data-feather="eye" class="icon-sm mb-1"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-controls">
            <button class="swiper-button-prev"></button>
            <button class="swiper-button-next"></button>
          </div>
          <script>
            var swiper = new Swiper("#companyPoliciesSwiper", {
              spaceBetween: 30,
              loop: true,
              navigation: {
                nextEl: "#companyPoliciesSwiper + .swiper-controls .swiper-button-next",
                prevEl: "#companyPoliciesSwiper + .swiper-controls .swiper-button-prev",
              },
            });
          </script>
        </div>
      </div>
    </div>
  </div> <!-- row -->

</div>