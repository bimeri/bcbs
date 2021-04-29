<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title')</title>

        <link rel="icon" href="{{URL::asset('/image/5.png')}}" type="image/x-icon">
        <link rel="stylesheet" href="{{ URL::asset('materialize/css/materialize.css') }}" />
        <link rel="stylesheet" href="{{ URL::asset('fontawesome/css/all.css') }}" />
        <script src="{{ URL::asset('jquery.min.js') }}"></script>
        <link rel="stylesheet" href="{{ URL::asset('admin.css') }}" />
        <link rel="stylesheet" href="{{ URL::asset('w3.css') }}" />
        <link rel="stylesheet" href="{{ URL::asset('toaster.css') }}" />
         <style>
            .active-link{
                background-color: #ccc !important;
            }
            i.i{
                position: fixed; margin-top: -25px; left: 80%;
            }
        </style>
        @yield('style')
    </head>
    <body>
        <nav class="">
            <div class="nav-wrapper teal">
                  <img src="{{ URL::asset(''.auth()->user()->profile.'') }}" width="55" height="50" class="w3-circle w3-border right logo-icon" id="dropbtn" style="margin-right:14px !important; margin-top:0.7px !important">
                  <h6 class="right hide-on-med-and-down w3-small w3-padding" style="margin-top:-3px">Hi, <b style="text-transform: uppercase">{{ auth()->user()->first_name }}</b></h6>
                  <a class="right hide-on-med-and-down w3-small w3-padding"><i class="fa fa-bell white-text"></i><span class="orange-text sty">0</span></a>
                  <a class="right hide-on-med-and-down w3-small w3-padding"><i class="fa fa-envelope white-text"></i><span class="orange-text sty">0</span></a>
              <ul id="nav-mobile" class="hide-on-med-and-down" style="margin-left: 120px">
                <li><a href="{{ route('admin.home') }}" class="name">{{ $setting->school_name }} &nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-chevron-right w3-large"></i></a></li>
                <li><a href="#" class="term"> @include('src.admin.includes.current_sem_year')</a></li>
              </ul>

              <ul id="nav-mobile small" class="hide-on-med-and-up">
                <li style="margin-left: 20px; margin-top: 16px; position: absolute;"><label class="name white-text w3-medium">{{ $setting->school_name }}</label></li>
                <li style="margin-top: -17px !important; margin-left:75px; position: absolute;">
                    <label class="term black-text w3-small">@include('src.admin.includes.current_sem_year')</label>
                </li>
              </ul>
            </div>
        </nav>
        <div class="w3-border w3-padding dropdownc dropbtn right"  id="myDropdown">
            <ul class="mydwn">
                <a class="hide-on-med-and-up">
                    <span class="fa fa-bell teal-text" id="span-in">&nbsp;&nbsp;&nbsp; {{ __('messages.profile') }} <b class="orange-text">0</b></span>
                </a>
                <a class="hide-on-med-and-up">
                    <span class="fa fa-envelope teal-text" id="span-in">&nbsp;&nbsp;&nbsp; {{ __('messages.notification') }} <b class="orange-text">0</b></span>
                </a><hr class="hide-on-med-and-up coc">
                <a href="#">
                    <span class="mdi-action-account-circle" id="span-in">&nbsp;{{ __('messages.profile') }}
                    </span>
                </a><hr class="coc">
                <a href="#">
                    <span class="mdi-content-create" id="span-in">&nbsp;{{ __('passwords.change_password') }}
                    </span>
                </a><hr class="coc">
                <a href="#">
                    <span class="mdi-action-supervisor-account" id="span-in">&nbsp;{{ __('auth.user_account') }}
                    </span>
                </a><hr class="coc">
                    <form action="{{ route('language.english') }}" method="post" class="w3-padding">@csrf
                        <button class="btn default waves-effect waves-green" type="submit">
                            <span class="mdi-content-create" id="span-in">&nbsp;<img src="{{ URL::asset('image/uk.png') }}" alt="flag" height="20" width="20"> {{ __('messages.english') }} @if(auth()->user()->lang == 'en')<i class="fa fa-check w3-small green-text"></i>@endif</span>
                        </button>
                    </form>
                     <form action="{{ route('language.french') }}" method="post" class="w3-padding">@csrf
                            <button class="btn default waves-effect waves-green" type="submit">
                                <span class="mdi-content-create" id="span-in">&nbsp;<img src="{{ URL::asset('image/fr.png') }}" alt="flag" height="20" width="20"> {{ __('messages.french') }} @if(auth()->user()->lang == 'fr') <i class="fa fa-check w3-small green-text"></i>@endif</span>
                            </button>
                    </form>
            </ul>
            <hr class="coc" style="margin-top:-20px">
            <a href="{{ route('admin.logout') }}">
                <strong id="dropdown-logout"><i class="fa fa-power-off"></i>&nbsp;{{ __('messages.logout') }} {{ auth()->user()->first_name }}</strong>
            </a>
         </div>

  <a href="#" data-target="slide-out" class="sidenav-trigger white-text w3-xlarge w3-padding" style="width:40px; margin-top: -60px; position: relative; z-index:10"><i class="fa fa-th"></i></a>

  <ul id="slide-out" class="sidenav" style="transform: translateX(-105%); overflow-y: scroll;">
    <li>
      <div class="user-view">
        <div class="containeradmin w3-margin-bottom">
            <img src="{{ URL::asset('image/logo/'.$setting->logo.' ') }}"  class="image left" alt="logo" style="margin-top:4px; height:40px; width:40px">
            <img src="{{ URL::asset('image/icon.jpg') }}" alt="Avatar" class="image right">
            <span class="white-black email">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ auth()->user()->email }}</span>
            <div class="overlay">
              <div class="textadmin">
                  <div class="row">
                    <h6 class="center white-text" style="text-align: center">{{ $setting->motto ?? '' }}</h6><hr style="margin-top: -10px;">
                  </div>
              </div>
            </div>
          </div>
      </div>
    </li><hr style="margin-top: 43px !important; border-top:1px solid rgb(60, 182, 182)">
        <ul class="collapsible w3-ul navbar-fixed" style="margin-top:-15px">
            <li>
                <div class="collapsible-header waves-effect waves-teal" onclick="classes()" @if(Request::is('admin/create/class', 'admin/create/subclass', 'admin/view/class', 'admin/getclass')) style="background-color: #ade7d9" @endif><i class="fa fa-asterisk orange-text w3-small"></i> {{ __('messages.manage_level') }}</div><i class="fa fa-chevron-down w3-small i" id="class"></i>
                <div class="collapsible-body">
                    <ul class="w3-border w3-padding" style="background-color: #d1fbfc">
                        <li><a href="" class="teal-text"  @if( Request::is('admin/create/class','admin/getclass'))  style="background-color: #e5e9e8" @endif  onclick="load()">{{ __('messages.add_level') }}</a></li>
                        <li><a href="" class="teal-text"  @if( Request::is('admin/view/class'))  style="background-color: #e5e9e8" @endif  onclick="load()">{{ __('messages.all_level') }}</a></li>
                    </ul>
                </div>
            </li>

            <li>
                <div class="collapsible-header waves-effect waves-teal" onclick="subjects()" @if(Request::is('admin/subject', 'admin/subject/all', 'admin/class/subject')) style="background-color: #ade7d9" @endif> &nbsp;<i class="fa fa-book pink-text w3-small"></i>{{ __("messages.manage_course") }}</div><i class="fa fa-chevron-down i w3-small" id="subject"></i>
                <div class="collapsible-body">
                    <ul class="w3-border w3-padding" style="background-color: #d1fbfc">
                        <li><a href="" class="teal-text w3-small" @if(Request::is('admin/subject')) style="background-color: #e5e9e8" @endif  onclick="load()"> Create Subject per class</a></li>
                        <li><a href="" class="teal-text"  @if(Request::is('admin/subject/all', 'admin/class/subject')) style="background-color: #e5e9e8" @endif  onclick="load()">See all subjects</a></li>
                    </ul>
                </div>
            </li>

            <li>
                <div class="collapsible-header waves-effect waves-teal" onclick="roles()" @if( Request::is('admin/role', 'admin/add_user', 'view_roles/'.request()->route("id").'', 'edit_user/'.request()->route("id").'', 'admin/edit_role/'.request()->route("id").'', 'admin/all_user'))  style="background-color: #ade7d9" @endif ><i class="fa fa-user teal-text w3-small"></i>{{ __('messages.teachers') }}</div><i class="fa fa-chevron-down w3-small i" id="role"></i>
                <div class="collapsible-body">
                    <ul class="w3-border w3-padding" style="background-color: #d1fbfc">
                        <li><a href="" class="teal-text" @if(Request::is('admin/create/teacher')) style="background-color: #e5e9e8" @endif  onclick="load()">{{__("messages.add_teachers")}}</a></li>
                        <li><a href="" class="teal-text" @if(Request::is('admin/teacher/assign', 'admin/teacher/subjects')) style="background-color: #e5e9e8" @endif  onclick="load()">{{ __("messages.course") }}</a></li>
                        <li><a href="" class="teal-text" @if(Request::is('admin/teacher/view')) style="background-color: #e5e9e8" @endif  onclick="load()">{{ __("messages.all_teachers") }}</a></li>
                    </ul>
                </div>
            </li>

                <li>
                <div class="collapsible-header waves-effect waves-teal" onclick="sectors()"  @if( Request::is('admin/sector', 'admin/background', 'admin/view/background', 'admin/view/sector'))  style="background-color: #ade7d9" @endif> &nbsp;<i class="fa fa-list red-text w3-small"></i> {{ __('messages.departments') }}</div><i class="fa fa-chevron-down w3-small i" id="sector"></i>
                    <div class="collapsible-body">
                        <ul class="w3-border w3-padding" style="background-color: #d1fbfc">
                            <li><a href="" class="teal-text"  @if( Request::is('admin/sector'))  style="background-color: #e5e9e8" @endif  onclick="load()">{{ __('messages.add_department') }}</a></li>
                            <li><a href="" class="teal-text"  @if( Request::is('admin/background'))  style="background-color: #e5e9e8" @endif  onclick="load()">{{ __('messages.assign_student') }}</a></li>
                            <li><a href="" class="teal-text"  @if( Request::is('admin/background'))  style="background-color: #e5e9e8" @endif  onclick="load()">{{ __('messages.student_department') }}</a></li>
                        </ul>
                    </div>
                </li>

                <li>
                    <div class="collapsible-header waves-effect waves-teal" onclick="students()"  @if(Request::is('admin/student/create', 'student/class/change', 'admin/student/list', 'admin/student', 'student/class_list', 'admin/student/subclasses')) style="background-color: #ade7d9" @endif><i class="fa fa-graduation-cap blue-text w3-small"></i> @lang('messages.manage_student')</div><i class="fa fa-chevron-down w3-small i" id="student"></i>
                    <div class="collapsible-body">
                        <ul class="w3-border w3-padding" style="background-color: #d1fbfc">
                        <li><a href="" class="teal-text"  @if(Request::is('admin/student/create')) style="background-color: #e5e9e8" @endif onclick="load()">{{ __("messages.enroll_student") }}</a></li>
                        <li><a href="" class="teal-text" @if(Request::is('admin/student/list', 'admin/student')) style="background-color: #e5e9e8" @endif onclick="load()">{{ __("messages.student_profile") }}</a></li>
                        </ul>
                    </div>
                </li>

                <li>
                    <div class="collapsible-header waves-effect waves-teal" onclick="libraries()"  @if(Request::is('admin/student/create', 'student/class/change', 'admin/student/list')) style="background-color: #ade7d9" @endif><i class="fa fa-book-reader indigo-text w3-small"></i> @lang('messages.manage_library')</div><i class="fa fa-chevron-down w3-small i" id="library"></i>
                    <div class="collapsible-body">
                        <ul class="w3-border w3-padding" style="background-color: #d1fbfc">
                        <li><a href="" class="teal-text"  @if(Request::is('admin/student/create')) style="background-color: #e5e9e8" @endif onclick="load()">{{ __("messages.add_books") }}</a></li>
                        <li><a href="" class="teal-text" @if(Request::is('admin/student/list', 'admin/student')) style="background-color: #e5e9e8" @endif onclick="load()">{{ __("messages.view_rent") }}</a></li>
                        </ul>
                    </div>
                </li>

            <li>
                <div class="collapsible-header waves-effect waves-teal" onclick="expenses()" @if(Request::is('admin/create/discipline', 'admin/record/discipline', 'admin/view/discipline')) style="background-color: #ade7d9" @endif><i class="fa fa-skull-crossbones lime-text w3-small"></i> {{ __("messages.discipline") }}</div><i class="fa fa-chevron-down w3-small i" id="expense"></i>
                <div class="collapsible-body">
                    <ul class="w3-border w3-padding" style="background-color: #d1fbfc">
                        <li><a href="" class="teal-text" @if(Request::is('admin/create/discipline')) style="background-color: #e5e9e8" @endif  onclick="load()">{{ __("messages.create_discipline") }}</a></li>
                        <li><a href="" class="teal-text" @if(Request::is('admin/record/discipline')) style="background-color: #e5e9e8" @endif  onclick="load()">{{ __("messages.record_discipline") }}</a></li>
                        <li><a href="" class="teal-text" @if(Request::is('admin/view/discipline')) style="background-color: #e5e9e8" @endif  onclick="load()">{{ __("messages.discipline_statistics") }}</a></li>
                    </ul>
                </div>
            </li>

            <li>
                <div class="collapsible-header waves-effect waves-teal" onclick="disciplines()" @if(Request::is('admin/view/discipline')) style="background-color: #ade7d9" @endif><i class="fa fa-street-view indigo-text w3-small"></i> {{ __("messages.attendance") }}</div><i class="fa fa-chevron-down i w3-small" id="disc"></i>
                <div class="collapsible-body">
                    <ul class="w3-border w3-padding" style="background-color: #d1fbfc">
                        <li><a href="" class="teal-text" @if(Request::is('admin/create/discipline')) style="background-color: #e5e9e8" @endif  onclick="load()">{{ __("messages.current_attendance") }}</a></li>
                        <li><a href="" class="teal-text" @if(Request::is('admin/record/discipline')) style="background-color: #e5e9e8" @endif  onclick="load()">{{ __("messages.attendance_form") }}</a></li>
                        <li><a href="" class="teal-text" @if(Request::is('admin/view/discipline')) style="background-color: #e5e9e8" @endif  onclick="load()">{{ __("messages.attendance_history") }}</a></li>
                    </ul>
                </div>
            </li>

            <li>
                <div class="collapsible-header waves-effect waves-teal" onclick="statistics()" @if(Request::is('admin/view/discipline')) style="background-color: #ade7d9" @endif><i class="fa fa-database purple-text w3-small"></i> {{ __("messages.statistics") }}</div><i class="fa fa-chevron-down i w3-small" id="stat"></i>
                <div class="collapsible-body">
                    <ul class="w3-border w3-padding" style="background-color: #d1fbfc">
                        <li><a href="" class="teal-text" @if(Request::is('admin/create/discipline')) style="background-color: #e5e9e8" @endif  onclick="load()">{{ __("messages.enrollment_statistics") }}</a></li>
                        <li><a href="" class="teal-text" @if(Request::is('admin/record/discipline')) style="background-color: #e5e9e8" @endif  onclick="load()">{{ __("messages.matriculation_statistics") }}</a></li>
                        <li><a href="" class="teal-text" @if(Request::is('admin/view/discipline')) style="background-color: #e5e9e8" @endif  onclick="load()">{{ __("messages.graduation_statistics") }}</a></li>
                    </ul>
                </div>
            </li>

            <li>
                <div class="collapsible-header waves-effect waves-teal" onclick="results()" @if(Request::is('student/marks/record', 'student/rank', 'class/result', 'class/student/result', 'get/student/record', 'class/type/result')) style="background-color: #ade7d9" @endif><i class="fa fa-file green-text w3-small"></i>{{ __("messages.result") }}</div><i class="fa fa-chevron-down i w3-small" id="result"></i>
                <div class="collapsible-body">
                    <ul class="w3-border w3-padding" style="background-color: #d1fbfc">
                        <li><a href="" class="teal-text" @if(Request::is('student/marks/record', 'get/student/record'))style="background-color: #e5e9e8"@endif  onclick="load()">Record Mark</a></li>
                        <li><a href="#!" class="teal-text">Student Results</a></li>
                    </ul>
                </div>
            </li>

            <li>
                <div class="collapsible-header waves-effect waves-teal" onclick="settings()" @if( Request::is('admin/school_theme', 'admin/school_profile', 'admin/more_setting', 'admin/all_setting'))   style="background-color: #ade7d9"  @endif><i class="fa fa-wrench w3-medium black-text"></i>{{ __("messages.settings") }}</div><i class="fa fa-chevron-down i w3-small" id="setting"></i>
                <div class="collapsible-body">
                    <ul class="w3-border w3-padding" style="background-color: #d1fbfc">
                        <li><a href="" class="teal-text" @if( Request::is('admin/school_theme', 'admin/more_setting', 'admin/all_setting'))  style="background-color:#e5e9e8" @endif onclick="load()">School theme</a></li> <!-- year, term, sequesnces -->
                        <li><a href="" class="teal-text" @if( Request::is('admin/school_profile'))  style="background-color:#e5e9e8" @endif onclick="load()">School profile</a></li> <!-- name, motto, logo, exam/test session,  -->
                    </ul>
                </div>
            </li>

                <li><a href="{{ route('admin.logout') }}"  class="waves-effect waves-light red-text"  onclick="load()">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="fa fa-power-off"></span> logout</a></li>

                <li>
                    <div class="collapsible-header waves-effect waves-teal"><i class="w3-small"></i></div>
                        <br>
                    </div>
                </li>
            </ul>
  </ul>

    <div class="cal">
        @include('config.error')
        @yield('content')
    </div>
        <div id="menu" class="teal" style="height: 800px !important; width: 100% !important; position: fixed !important; top:0px; bottom: 0px; left: 0px; right: 0px; z-index: 1000; opacity:.5 !important">
            <div class="w3-margin-top">
                <center>
                    <div class="preloader-wrapper big active spinner-white" style="margin-top: 220px !important;">
                        <div class="spinner-layer spinner-white-only">
                            <div class="circle-clipper left">
                                <div class="circle"></div>
                            </div>
                            <div class="gap-patch">
                                <div class="circle"></div>
                            </div>
                            <div class="circle-clipper right">
                                <div class="circle"></div>
                            </div>
                        </div>
                    </div>
                </center>
            </div>
        </div>
        <a class="scrollToTop btn-floating btn-large waves-effect waves-light teal"><i class="fa fa-arrow-up"></i></a>

        <div class="footer_one">
            <center>
                <p id="dateField" style="color: white;">&nbsp;</p>
                <p style="text-align: center; color: #fff">&copy;Powered by
                    <a  target="_blank" href ="#" style="color:#00ccff"> Bimeri. Ltd</a>
                </p>
            </center>
        </div>
        <script src="{{ URL::asset('toaster.js') }}"></script>
    <script src="{{ URL::asset('materialize/js/materialize.min.js') }}"></script>
    <script src="{{ URL::asset('myjs.js') }}"></script>
    <script src="{{ URL::asset('sweat_alert.js') }}"></script>
        <script>
            @if(Session::has('message'))
              var type = "{{ Session::get('alert-type', 'info') }}";
              toastr.options = {
                    "closeButton": false,
                    "debug": false,
                    "newestOnTop": true,
                    "progressBar": false,
                    "positionClass": "toast-top-right",
                    "preventDuplicates": false,
                    "onclick": null,
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "timeOut": "9000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                    }
              switch(type){
                  case 'info':
                      toastr.info("{{ Session::get('message') }}");
                      break;

                  case 'warning':
                      toastr.warning("{{ Session::get('message') }}");
                      break;

                  case 'success':
                      Command: toastr["success"]("{{ Session::get('message') }}")
                      break;

                  case 'error':
                      toastr.error("{{ Session::get('message') }}");
                      break;
              }
            @endif
        </script>
    </body>
</html>
