@include('template.head')
<!-- Layout wrapper -->
<div class="layout-wrapper layout-navbar-full layout-horizontal layout-without-menu">
    <div class="layout-container">
        <!-- Navbar -->

        @include('template.navbar')

        <!-- / Navbar -->

        <!-- Layout container -->
        <div class="layout-page">
            <!-- Content wrapper -->
            <div class="content-wrapper">
                <!-- Menu -->

                <!-- / Menu -->

                <!-- Content -->
                <div class="container-xxl flex-grow-1 container-p-y">
                    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">FORM PCPDB </span>SMA BOPKRI 1 YOGYAKARTA</h4>
                    <!-- Default -->
                    <div class="row">
                        <div class="col-12 mb-4">
                            @if($errors->has('ijazahSd'))
                                <div class="alert alert-danger d-flex align-items-center" role="alert">
                                    <span class="alert-icon text-danger me-2">
                                        <i class="ti ti-ban ti-xs"></i>
                                    </span>
                                    <!-- <strong>{{ $errors->first('ijazahSd') }}</strong> -->
                                    <strong>Ijazah SD maximal ukuran upload file 2mb / 2048kb</strong>
                                </div>
                            @endif
                            <div id="wizard-validation" class="bs-stepper mt-2">
                                <div class="bs-stepper-header">
                                    <!-- <div class="step" data-target="#biodata-siswa-validation">
                                        <button type="button" class="step-trigger">
                                            <span class="bs-stepper-circle">1</span>
                                            <span class="bs-stepper-label mt-1">
                                                <span class="bs-stepper-title">Profile Siswa</span>
                                            </span>
                                        </button>
                                    </div>
                                    <div class="line">
                                        <i class="ti ti-chevron-right"></i>
                                    </div>
                                    <div class="step" data-target="#page-two">
                                        <button type="button" class="step-trigger">
                                            <span class="bs-stepper-circle">2</span>
                                            <span class="bs-stepper-label">
                                                <span class="bs-stepper-title">Absensi dan Nilai</span>
                                            </span>
                                        </button>
                                    </div>
                                    <div class="line">
                                        <i class="ti ti-chevron-right"></i>
                                    </div>
                                    <div class="step" data-target="#page-three">
                                        <button type="button" class="step-trigger">
                                            <span class="bs-stepper-circle">3</span>
                                            <span class="bs-stepper-label">
                                                <span class="bs-stepper-title">Biodata Orangtua</span>
                                            </span>
                                        </button>
                                    </div>
                                    <div class="line">
                                        <i class="ti ti-chevron-right"></i>
                                    </div> -->
                                    <div class="step" data-target="#page-four">
                                        <button type="button" class="step-trigger">
                                            <span class="bs-stepper-circle">4</span>
                                            <span class="bs-stepper-label">
                                                <span class="bs-stepper-title">Lampiran</span>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                                <div class="bs-stepper-content">
                                    <form id="wizard-validation-form" action="{{ route('store.student') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @include('landing.page_one')
                                        @include('landing.page_two')
                                        @include('landing.page_three')
                                        @include('landing.page_four')
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modern -->

                </div>
                <!--/ Content -->

                <!-- Footer -->
                @include('template.footer')
                <!-- / Footer -->

                <div class="content-backdrop fade"></div>
            </div>
            <!--/ Content wrapper -->
        </div>

        <!--/ Layout container -->
    </div>
</div>

<!-- Overlay -->
<div class="layout-overlay layout-menu-toggle"></div>
<div class="drag-target"></div>
@include('template.foot')