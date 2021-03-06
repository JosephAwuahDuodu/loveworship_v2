<div>
    <div class="row">
        <div class="col-md-6 col-xl-3">
            <a href="#" class="card card-box mb-5 card-box-border-bottom border-success">
                <div class="card-body">
                    <div class="align-box-row align-items-start">
                        <div class="mr-3">
                            <div class="bg-success text-center text-white font-size-xl d-50 rounded-circle">
                                <i class="fas fa-briefcase"></i>
                            </div>
                        </div>
                        <div>
                            <div class="font-weight-bold">
                                <small class="font-weight-bold d-block mb-1 text-uppercase">All Members</small>
                                <span class="font-size-xxl text-success mt-1">{{ $tab_values['members'] }}</span>
                            </div>
                        </div>
                        <div class="ml-auto card-hover-indicator align-self-center">
                            <i class="fas fa-chevron-right font-size-xl"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a href="#" class="card card-box mb-5 card-box-border-bottom border-first">
                <div class="card-body">
                    <div class="align-box-row align-items-start">
                        <div class="mr-3">
                            <div class="bg-first text-center text-white font-size-xl d-50 rounded-circle">
                                <i class="fas fa-cash-register"></i>
                            </div>
                        </div>
                        <div>
                            <div class="font-weight-bold">
                                <small class="font-weight-bold d-block mb-1 text-uppercase">Tithes</small>
                                <span
                                    class="font-size-xxl text-first mt-1">{{ $tab_values['tithes_this_month'] }}</span>
                            </div>
                            <!-- <div class="mt-2">
                                                <i class="fas fa-arrow-up text-success"></i>
                                                <span class="text-success">54.2%</span>
                                                <span class="text-black-50">up</span>
                                            </div> -->
                        </div>
                        <div class="ml-auto card-hover-indicator align-self-center">
                            <i class="fas fa-chevron-right font-size-xl"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a href="#" class="card card-box mb-5 card-box-border-bottom border-danger">
                <div class="card-body">
                    <div class="align-box-row align-items-start">
                        <div class="mr-3">
                            <div class="bg-danger text-center text-white font-size-xl d-50 rounded-circle">
                                <i class="fas fa-car-battery"></i>
                            </div>
                        </div>
                        <div>
                            <div class="font-weight-bold">
                                <small class="font-weight-bold d-block mb-1 text-uppercase">Offertory</small>
                                <span
                                    class="font-size-xxl text-danger mt-1">{{ $tab_values['offertory_this_month'] }}</span>
                            </div>
                        </div>
                        <div class="ml-auto card-hover-indicator align-self-center">
                            <i class="fas fa-chevron-right font-size-xl"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a href="#" class="card card-box mb-5 card-box-border-bottom border-warning">
                <div class="card-body">
                    <div class="align-box-row align-items-start">
                        <div class="mr-3">
                            <div class="bg-warning text-center text-white font-size-xl d-50 rounded-circle">
                                <i class="far fa-keyboard"></i>
                            </div>
                        </div>
                        <div>
                            <div class="font-weight-bold">
                                <small class="font-weight-bold d-block mb-1 text-uppercase">Branches</small>
                                <span class="font-size-xxl text-warning mt-1">{{ $tab_values['branches'] }}</span>
                            </div>
                        </div>
                        <div class="ml-auto card-hover-indicator align-self-center">
                            <i class="fas fa-chevron-right font-size-xl"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
