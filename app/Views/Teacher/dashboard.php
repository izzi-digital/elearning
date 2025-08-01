<?= $this->extend(teacher_base()); ?>

<?= $this->section('content'); ?>
<!-- <div class="row">
  <div class="col-lg-8">
    <div class="row">
      <div class="col-sm-6 col-lg-6 col-xl-3">
        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
          <div class="iq-card-body">
            <div class="d-flex align-items-center justify-content-between">
              <div class="iq-cart-text text-capitalize">
                <p class="mb-0">
                  view
                </p>
              </div>
              <div class="icon iq-icon-box-top rounded-circle bg-primary">
                <i class="las la-eye"></i>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between mt-3">
              <h4 class=" mb-0">+24K</h4>
              <p class="mb-0 text-primary"><span><i class="fa fa-caret-down mr-2"></i></span>35%</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-6 col-xl-3">
        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
          <div class="iq-card-body">
            <div class="d-flex align-items-center justify-content-between">
              <div class="iq-cart-text text-capitalize">
                <p class="mb-0 font-size-14">
                  Rated This App
                </p>
              </div>
              <div class="icon iq-icon-box-top rounded-circle bg-warning">
                <i class="lar la-star"></i>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between mt-3">
              <h4 class=" mb-0">+55K</h4>
              <p class="mb-0 text-warning"><span><i class="fa fa-caret-up mr-2"></i></span>50%</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-6 col-xl-3">
        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
          <div class="iq-card-body">
            <div class="d-flex align-items-center justify-content-between">
              <div class="iq-cart-text text-capitalize">
                <p class="mb-0 font-size-14">
                  Downloaded
                </p>
              </div>
              <div class="icon iq-icon-box-top rounded-circle bg-info">
                <i class="las la-download"></i>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between mt-3">
              <h4 class=" mb-0">+1M</h4>
              <p class="mb-0 text-info"><span><i class="fa fa-caret-up mr-2"></i></span>80%</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-6 col-xl-3">
        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
          <div class="iq-card-body">
            <div class="d-flex align-items-center justify-content-between">
              <div class="iq-cart-text text-uppercase">
                <p class="mb-0 font-size-14">
                  Visitors
                </p>
              </div>
              <div class="icon iq-icon-box-top rounded-circle bg-success">
                <i class="lar la-user"></i>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between mt-3">
              <h4 class=" mb-0">+2M</h4>
              <p class="mb-0 text-success"><span><i class="fa fa-caret-up mr-2"></i></span>80%</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="iq-card">
      <div class="iq-card-header d-flex justify-content-between align-items-center">
        <div class="iq-header-title">
          <h4 class="card-title">Top Rated Item </h4>
        </div>
        <div id="top-rated-item-slick-arrow" class="slick-aerrow-block "></div>
      </div>
      <div class="iq-card-body">
        <ul class="list-unstyled row top-rated-item mb-0">
          <li class="col-sm-6 col-lg-4 col-xl-3 iq-rated-box">
            <div class="iq-card mb-0">
              <div class="iq-card-body p-0">
                <div class="iq-thumb">
                  <a href="javascript:void(0)">
                    <img src="<?= base_url() ?>assets/teacher/images/dashboard/01.jpg" class="img-fluid w-100 img-border-radius" alt="">
                  </a>
                </div>
                <div class="iq-feature-list">
                  <h6 class="font-weight-600 mb-0">The Last Breath</h6>
                  <p class="mb-0 mt-2">T.v show</p>
                  <div class="d-flex align-items-center my-2 iq-ltr-direction">
                    <p class="mb-0 mr-2"><i class="lar la-eye mr-1"></i> 134</p>
                    <p class="mb-0 "><i class="las la-download ml-2"></i> 30 k</p>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="col-sm-6 col-lg-4 col-xl-3 iq-rated-box">
            <div class="iq-card mb-0">
              <div class="iq-card-body p-0">
                <div class="iq-thumb">
                  <a href="javascript:void(0)">
                    <img src="<?= base_url() ?>assets/teacher/images/dashboard/02.jpg" class="img-fluid w-100 img-border-radius" alt="">
                  </a>
                </div>
                <div class="iq-feature-list">
                  <h6 class="font-weight-600 mb-0">Last Night</h6>
                  <p class="mb-0 mt-2">Movie</p>
                  <div class="d-flex align-items-center my-2 iq-ltr-direction">
                    <p class="mb-0 mr-2"><i class="lar la-eye mr-1"></i> 133</p>
                    <p class="mb-0 "><i class="las la-download ml-2"></i> 20 k</p>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="col-sm-6 col-lg-4 col-xl-3 iq-rated-box">
            <div class="iq-card mb-0">
              <div class="iq-card-body p-0">
                <div class="iq-thumb">
                  <a href="javascript:void(0)">
                    <img src="<?= base_url() ?>assets/teacher/images/dashboard/03.jpg" class="img-fluid w-100 img-border-radius" alt="">
                  </a>
                </div>
                <div class="iq-feature-list">
                  <h6 class="font-weight-600 mb-0">Jeon Woochie</h6>
                  <p class="mb-0 mt-2">Movie</p>
                  <div class="d-flex align-items-center my-2 iq-ltr-direction">
                    <p class="mb-0 mr-2"><i class="lar la-eye mr-1"></i> 222</p>
                    <p class="mb-0 "><i class="las la-download ml-2"></i> 40 k</p>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="col-sm-6 col-lg-4 col-xl-3 iq-rated-box">
            <div class="iq-card mb-0">
              <div class="iq-card-body p-0">
                <div class="iq-thumb">
                  <a href="javascript:void(0)">
                    <img src="<?= base_url() ?>assets/teacher/images/dashboard/04.jpg" class="img-fluid w-100 img-border-radius" alt="">
                  </a>
                </div>
                <div class="iq-feature-list">
                  <h6 class="font-weight-600 mb-0">Dino Land</h6>
                  <p class="mb-0 mt-2">T.v show</p>
                  <div class="d-flex align-items-center my-2 iq-ltr-direction">
                    <p class="mb-0 mr-2"><i class="lar la-eye mr-1"></i> 122</p>
                    <p class="mb-0 "><i class="las la-download ml-2"></i> 25 k</p>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="col-sm-6 col-lg-4 col-xl-3 iq-rated-box">
            <div class="iq-card mb-0">
              <div class="iq-card-body p-0">
                <div class="iq-thumb">
                  <a href="javascript:void(0)">
                    <img src="<?= base_url() ?>assets/teacher/images/dashboard/05.jpg" class="img-fluid w-100 img-border-radius" alt="">
                  </a>
                </div>
                <div class="iq-feature-list">
                  <h6 class="font-weight-600 mb-0">Last Race</h6>
                  <p class="mb-0 mt-2">T.v show</p>
                  <div class="d-flex align-items-center my-2 iq-ltr-direction">
                    <p class="mb-0 mr-2"><i class="lar la-eye mr-1"></i> 144</p>
                    <p class="mb-0 "><i class="las la-download ml-2"></i> 35 k</p>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="col-sm-6 col-lg-4 col-xl-3 iq-rated-box">
            <div class="iq-card mb-0">
              <div class="iq-card-body p-0">
                <div class="iq-thumb">
                  <a href="javascript:void(0)">
                    <img src="<?= base_url() ?>assets/teacher/images/dashboard/06.jpg" class="img-fluid w-100 img-border-radius" alt="">
                  </a>
                </div>
                <div class="iq-feature-list">
                  <h6 class="font-weight-600 mb-0">Opend Dead Shot</h6>
                  <p class="mb-0 mt-2">T.v show</p>
                  <div class="d-flex align-items-center my-2 iq-ltr-direction">
                    <p class="mb-0 mr-2"><i class="lar la-eye mr-1"></i> 134</p>
                    <p class="mb-0 "><i class="las la-download ml-2"></i> 30 k</p>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="col-lg-4">
    <div class="iq-card iq-card iq-card-block iq-card-stretch iq-card-height">
      <div class="iq-card-header">
        <div class="iq-header-title">
          <h4 class="card-title text-center">User's Of Product</h4>
        </div>
      </div>
      <div class="iq-card-body pb-0">
        <div id="view-chart-01">
        </div>
        <div class="row mt-1">
          <div class="col-sm-6 col-md-3 col-lg-6 iq-user-list">
            <div class="iq-card">
              <div class="iq-card-body">
                <div class="media align-items-center">
                  <div class="iq-user-box bg-primary"></div>
                  <div class="media-body text-white">
                    <p class="mb-0 font-size-14 line-height">New <br>
                      Customer
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-6 iq-user-list">
            <div class="iq-card">
              <div class="iq-card-body">
                <div class="media align-items-center">
                  <div class="iq-user-box bg-warning"></div>
                  <div class="media-body text-white">
                    <p class="mb-0 font-size-14 line-height">Exsisting <br>
                      Subscriber's
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-6 iq-user-list">
            <div class="iq-card">
              <div class="iq-card-body">
                <div class="media align-items-center">
                  <div class="iq-user-box bg-info"></div>
                  <div class="media-body text-white">
                    <p class="mb-0 font-size-14 line-height">Daily<br>
                      Visitor's
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-6 iq-user-list">
            <div class="iq-card">
              <div class="iq-card-body">
                <div class="media align-items-center">
                  <div class="iq-user-box bg-danger"></div>
                  <div class="media-body text-white">
                    <p class="mb-0 font-size-14 line-height">Extented <br>
                      Subscriber's
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> -->
<?= $this->endSection(); ?>