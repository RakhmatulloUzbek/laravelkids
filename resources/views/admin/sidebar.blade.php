<div class="theme-setting-wrapper">
    <div id="settings-trigger"><a href=""><i class="ti-settings"></i></a></div>
</div>
<div id="right-sidebar" class="settings-panel">
    <i class="settings-close ti-close"></i>
    <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="todo-tab" data-bs-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="chats-tab" data-bs-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
        </li>
    </ul>
    <div class="tab-content" id="setting-content">
        <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
            <div class="add-items d-flex px-3 mb-0">
                <form class="form w-100">
                    <div class="form-group d-flex">
                        <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                        <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                    </div>
                </form>
            </div>
            <div class="list-wrapper px-3">
                <ul class="d-flex flex-column-reverse todo-list">
                    <li>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="checkbox" type="checkbox">
                                Team review meeting at 3.00 PM
                            </label>
                        </div>
                        <i class="remove ti-close"></i>
                    </li>
                    <li>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="checkbox" type="checkbox">
                                Prepare for presentation
                            </label>
                        </div>
                        <i class="remove ti-close"></i>
                    </li>
                    <li>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="checkbox" type="checkbox">
                                Resolve all the low priority tickets due today
                            </label>
                        </div>
                        <i class="remove ti-close"></i>
                    </li>
                    <li class="completed">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="checkbox" type="checkbox" checked>
                                Schedule meeting for next week
                            </label>
                        </div>
                        <i class="remove ti-close"></i>
                    </li>
                    <li class="completed">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="checkbox" type="checkbox" checked>
                                Project review
                            </label>
                        </div>
                        <i class="remove ti-close"></i>
                    </li>
                </ul>
            </div>
            <h4 class="px-3 text-muted mt-5 fw-light mb-0">Events</h4>
            <div class="events pt-4 px-3">
                <div class="wrapper d-flex mb-2">
                    <i class="ti-control-record text-primary me-2"></i>
                    <span>Feb 11 2018</span>
                </div>
                <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
                <p class="text-gray mb-0">The total number of sessions</p>
            </div>
            <div class="events pt-4 px-3">
                <div class="wrapper d-flex mb-2">
                    <i class="ti-control-record text-primary me-2"></i>
                    <span>Feb 7 2018</span>
                </div>
                <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
                <p class="text-gray mb-0 ">Call Sarah Graves</p>
            </div>
        </div>
        <!-- To do section tab ends -->
        <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
            <div class="d-flex align-items-center justify-content-between border-bottom">
                <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
                <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 fw-normal">See All</small>
            </div>
            <ul class="chat-list">
                <li class="list active">
                    <div class="profile"><img src="{{asset('assets')}}/Admin/images/faces/face1.jpg" alt="image"><span class="online"></span></div>
                    <div class="info">
                        <p>Thomas Douglas</p>
                        <p>Available</p>
                    </div>
                    <small class="text-muted my-auto">19 min</small>
                </li>
                <li class="list">
                    <div class="profile"><img src="{{asset('assets')}}/Admin/images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
                    <div class="info">
                        <div class="wrapper d-flex">
                            <p>Catherine</p>
                        </div>
                        <p>Away</p>
                    </div>
                    <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                    <small class="text-muted my-auto">23 min</small>
                </li>
                <li class="list">
                    <div class="profile"><img src="{{asset('assets')}}/Admin/images/faces/face3.jpg" alt="image"><span class="online"></span></div>
                    <div class="info">
                        <p>Daniel Russell</p>
                        <p>Available</p>
                    </div>
                    <small class="text-muted my-auto">14 min</small>
                </li>
                <li class="list">
                    <div class="profile"><img src="{{asset('assets')}}/Admin/images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
                    <div class="info">
                        <p>James Richardson</p>
                        <p>Away</p>
                    </div>
                    <small class="text-muted my-auto">2 min</small>
                </li>
                <li class="list">
                    <div class="profile"><img src="{{asset('assets')}}/Admin/images/faces/face5.jpg" alt="image"><span class="online"></span></div>
                    <div class="info">
                        <p>Madeline Kennedy</p>
                        <p>Available</p>
                    </div>
                    <small class="text-muted my-auto">5 min</small>
                </li>
                <li class="list">
                    <div class="profile"><img src="{{asset('assets')}}/Admin/images/faces/face6.jpg" alt="image"><span class="online"></span></div>
                    <div class="info">
                        <p>Sarah Graves</p>
                        <p>Available</p>
                    </div>
                    <small class="text-muted my-auto">47 min</small>
                </li>
            </ul>
        </div>
        <!-- chat tab ends -->
    </div>
</div>
<!-- settings tab ends -->

<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.index')}}">
                <i class="menu-icon mdi mdi-buffer"></i>
                <span class="menu-title">Home</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.courses')}}">
                <i class="menu-icon mdi mdi-buffer"></i>
                <span class="menu-title">Cources</span>
            </a>
        </li>
{{--        <li class="nav-item ">--}}
{{--            <a class="nav-link"  href=""> {{request()->routeIs('/admin/course/') ? 'active' : ''}}"--}}
{{--            <a class="nav-link"  href="">--}}
{{--                <i class="menu-icon mdi mdi-file-multiple"></i>--}}
{{--                <span class="menu-title">Kullanıcılar</span>--}}
{{--            </a>--}}
{{--        </li>--}}
        <li class="nav-item ">
            <a class="nav-link" href="">
                <i class="menu-icon bi bi-envelope-fill"></i>
                <span class="menu-title">Messages</span>
            </a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" href="">
                <i class="menu-icon bi bi-question-square-fill"></i>
                <span class="menu-title">Announces</span>
            </a>
        </li>
{{--        <li class="nav-item">--}}
{{--            <a class="nav-link" data-bs-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">--}}
{{--                <i class="menu-icon bi bi-calendar-check-fill"></i>--}}
{{--                <span class="menu-title">Appointments</span>--}}
{{--                <i class="menu-arrow"></i>--}}
{{--            </a>--}}
{{--            <div class="collapse" id="icons" style="">--}}
{{--                <ul class="nav flex-column sub-menu">--}}
{{--                    <li class="nav-item"> <a class="nav-link" href=""> All </a></li>--}}
{{--                    <li class="nav-item"> <a class="nav-link" href=""> New </a></li>--}}
{{--                    <li class="nav-item"> <a class="nav-link" href=""> Old</a></li>--}}
{{--                    <li class="nav-item"> <a class="nav-link" href=""> Canceled</a></li>--}}
{{--                    <li class="nav-item"> <a class="nav-link" href=""> Deleted</a></li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </li>--}}
        <li class="nav-item ">
            <a class="nav-link" href="{{route('admin.teachers')}}">
                <i class="menu-icon mdi mdi-account-multiple"></i>
                <span class="menu-title">Teachers</span>
            </a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" href="{{route('admin.students')}}">
                <i class="menu-icon mdi mdi-account-multiple"></i>
                <span class="menu-title">Students</span>
            </a>
        </li>
    </ul>
</nav>
