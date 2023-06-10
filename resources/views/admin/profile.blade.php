@extends('layouts/admin/default')
@section('content')

<div class="row" id="user-profile">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="wideget-user mb-2">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="row">
                                <div class="panel profile-cover">
                                    <div class="profile-cover__action bg-img"></div>
                                    <div class="profile-cover__img">
                                        <div class="profile-img-1">
                                            <img src="../assets/images/users/21.jpg" alt="img">
                                        </div>
                                        <div class="profile-img-content text-dark text-start">
                                            <div class="text-dark">
                                                <h3 class="h3 mb-2">Percy Kewshun</h3>
                                                <h5 class="text-muted">Web Developer</h5>
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
<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">
                <div class="main-profile-contact-list">
                    <div class="me-5">
                        <div class="media mb-4">
                            <div class="media-icon bg-secondary bradius me-3 mt-1">
                                <i class="fe fe-edit fs-20 text-white"></i>
                            </div>
                            <div class="media-body">
                                <span class="text-muted">Posts</span>
                                <div class="fw-semibold fs-25">
                                    328
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="me-5 mt-5 mt-md-0">
                        <div class="media mb-4">
                            <div class="media-icon bg-danger bradius text-white me-3 mt-1">
                                <span class="mt-3">
                                    <i class="fe fe-users fs-20"></i>
                                </span>
                            </div>
                            <div class="media-body">
                                <span class="text-muted">Followers</span>
                                <div class="fw-semibold fs-25">
                                    937k
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="me-0 mt-5 mt-md-0">
                        <div class="media">
                            <div class="media-icon bg-primary text-white bradius me-3 mt-1">
                                <span class="mt-3">
                                    <i class="fe fe-cast fs-20"></i>
                                </span>
                            </div>
                            <div class="media-body">
                                <span class="text-muted">Following</span>
                                <div class="fw-semibold fs-25">
                                    2,876
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop