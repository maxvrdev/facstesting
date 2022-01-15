<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body {
            background-color: #f9f9fa
        }

        .flex {
            -webkit-box-flex: 1;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto
        }

        @media (max-width:991.98px) {
            .padding {
                padding: 1.5rem
            }
        }

        @media (max-width:767.98px) {
            .padding {
                padding: 1rem
            }
        }

        .padding {
            padding: 5rem
        }

        .card {
            box-shadow: none;
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            -ms-box-shadow: none
        }

        .pl-3,
        .px-3 {
            padding-left: 1rem !important
        }

        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid #d2d2dc;
            border-radius: 0
        }

        .pr-3,
        .px-3 {
            padding-right: 1rem !important
        }

        .card .card-body {
            padding: 1.25rem 1.75rem
        }

        .card-body {
            flex: 1 1 auto;
            padding: 1.25rem
        }

        .card .card-title {
            color: #000000;
            margin-bottom: 0.625rem;
            text-transform: capitalize;
            font-size: 0.875rem;
            font-weight: 500
        }

        .add-items {
            margin-bottom: 1.5rem;
            overflow: hidden
        }

        .d-flex {
            display: flex !important
        }

        .add-items input[type="text"] {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
            width: 100%;
            background: transparent
        }

        .form-control {
            border: 1px solid #f3f3f3;
            font-weight: 400;
            font-size: 0.875rem
        }

        .form-control {
            display: block;
            width: 100%;
            padding: 0.875rem 1.375rem;
            font-size: 1rem;
            line-height: 1;
            color: #495057;
            background-color: #ffffff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            border-radius: 2px;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out
        }

        .add-items .btn {
            margin-left: .5rem
        }

        .btn {
            font-size: 0.875rem;
            line-height: 1;
            font-weight: 400;
            padding: .7rem 1.5rem;
            border-radius: 0.1275rem
        }

        .list-wrapper {
            height: 100%;
            max-height: 100%
        }

        .add-items {
            margin-bottom: 1.5rem;
            overflow: hidden
        }

        .add-items input[type="text"] {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
            width: 100%;
            background: transparent
        }

        .add-items .btn,
        .add-items .fc button,
        .fc .add-items button,
        .add-items .ajax-upload-dragdrop .ajax-file-upload,
        .ajax-upload-dragdrop .add-items .ajax-file-upload,
        .add-items .swal2-modal .swal2-buttonswrapper .swal2-styled,
        .swal2-modal .swal2-buttonswrapper .add-items .swal2-styled,
        .add-items .wizard>.actions a,
        .wizard>.actions .add-items a {
            margin-left: .5rem
        }

        .rtl .add-items .btn,
        .rtl .add-items .fc button,
        .fc .rtl .add-items button,
        .rtl .add-items .ajax-upload-dragdrop .ajax-file-upload,
        .ajax-upload-dragdrop .rtl .add-items .ajax-file-upload,
        .rtl .add-items .swal2-modal .swal2-buttonswrapper .swal2-styled,
        .swal2-modal .swal2-buttonswrapper .rtl .add-items .swal2-styled,
        .rtl .add-items .wizard>.actions a,
        .wizard>.actions .rtl .add-items a {
            margin-left: auto;
            margin-right: .5rem
        }

        .list-wrapper {
            height: 100%;
            max-height: 100%
        }

        .list-wrapper ul {
            padding: 0;
            text-align: left;
            list-style: none;
            margin-bottom: 0
        }

        .list-wrapper ul li {
            font-size: .9375rem;
            padding: .4rem 0;
            border-bottom: 1px solid #f3f3f3
        }

        .list-wrapper ul li:first-child {
            border-bottom: none
        }

        .list-wrapper ul li .form-check {
            max-width: 90%;
            margin-top: .25rem;
            margin-bottom: .25rem
        }

        .list-wrapper ul li .form-check label:hover {
            cursor: pointer
        }

        .list-wrapper input[type="checkbox"] {
            margin-right: 15px
        }

        .list-wrapper .remove {
            cursor: pointer;
            font-size: 1.438rem;
            font-weight: 600;
            width: 1.25rem;
            height: 1.25rem;
            line-height: 20px;
            text-align: center
        }

        .list-wrapper .completed {
            text-decoration: line-through;
            text-decoration-color: #3da5f4
        }

        .list-wrapper ul li .form-check {
            max-width: 90%;
            margin-top: .25rem;
            margin-bottom: .25rem
        }

        .list-wrapper ul li .form-check,
        .list-wrapper ul li .form-check .form-check-label,
        .email-wrapper .mail-sidebar .menu-bar .profile-list-item a .user .u-name,
        .email-wrapper .mail-sidebar .menu-bar .profile-list-item a .user .u-designation,
        .email-wrapper .mail-list-container .mail-list .content .sender-name,
        .email-wrapper .message-body .attachments-sections ul li .details p.file-name,
        .settings-panel .chat-list .list .info p {
            text-overflow: ellipsis;
            overflow: hidden;
            max-width: 100%;
            white-space: nowrap
        }

        .form-check {
            position: relative;
            display: block;
            margin-top: 10px;
            margin-bottom: 10px;
            padding-left: 0
        }

        .list-wrapper ul li .form-check,
        .list-wrapper ul li .form-check .form-check-label,
        .email-wrapper .mail-sidebar .menu-bar .profile-list-item a .user .u-name,
        .email-wrapper .mail-sidebar .menu-bar .profile-list-item a .user .u-designation,
        .email-wrapper .mail-list-container .mail-list .content .sender-name,
        .email-wrapper .message-body .attachments-sections ul li .details p.file-name,
        .settings-panel .chat-list .list .info p {
            text-overflow: ellipsis;
            overflow: hidden;
            max-width: 100%;
            white-space: nowrap
        }

        .form-check .form-check-label {
            min-height: 18px;
            display: block;
            margin-left: 1.75rem;
            font-size: 0.875rem;
            line-height: 1.5
        }

        .form-check-label {
            margin-bottom: 0
        }

        .list-wrapper input[type="checkbox"] {
            margin-right: 15px
        }

        .form-check .form-check-label input {
            position: absolute;
            top: 0;
            left: 0;
            margin-left: 0;
            margin-top: 0;
            z-index: 1;
            cursor: pointer;
            opacity: 0;
            filter: alpha(opacity=0)
        }

        input[type="radio"],
        input[type="checkbox"] {
            box-sizing: border-box;
            padding: 0
        }

        .list-wrapper ul li .form-check,
        .list-wrapper ul li .form-check .form-check-label,
        .email-wrapper .mail-sidebar .menu-bar .profile-list-item a .user .u-name,
        .email-wrapper .mail-sidebar .menu-bar .profile-list-item a .user .u-designation,
        .email-wrapper .mail-list-container .mail-list .content .sender-name,
        .email-wrapper .message-body .attachments-sections ul li .details p.file-name,
        .settings-panel .chat-list .list .info p {
            text-overflow: ellipsis;
            overflow: hidden;
            max-width: 100%;
            white-space: nowrap
        }

        .form-check .form-check-label input[type="checkbox"]+.input-helper:before {
            content: "";
            width: 18px;
            height: 18px;
            border-radius: 2px;
            border: solid #405189;
            border-width: 2px;
            -webkit-transition: all;
            -moz-transition: all;
            -ms-transition: all;
            -o-transition: all;
            transition: all;
            transition-duration: 0s;
            -webkit-transition-duration: 250ms;
            transition-duration: 250ms
        }

        .form-check .form-check-label input[type="checkbox"]+.input-helper:before,
        .form-check .form-check-label input[type="checkbox"]+.input-helper:after {
            position: absolute;
            top: 0;
            left: 0
        }

        .form-check .form-check-label input[type="checkbox"]+.input-helper:after {
            -webkit-transition: all;
            -moz-transition: all;
            -ms-transition: all;
            -o-transition: all;
            transition: all;
            transition-duration: 0s;
            -webkit-transition-duration: 250ms;
            transition-duration: 250ms;
            font-family: Material Design Icons;
            opacity: 0;
            filter: alpha(opacity=0);
            -webkit-transform: scale(0);
            -ms-transform: scale(0);
            -o-transform: scale(0);
            transform: scale(0);
            content: '\F12C';
            font-size: .9375rem;
            font-weight: bold;
            color: #ffffff
        }

        .form-check .form-check-label input[type="checkbox"]+.input-helper:before,
        .form-check .form-check-label input[type="checkbox"]+.input-helper:after {
            position: absolute;
            top: 0;
            left: 0
        }

        .form-check .form-check-label input[type="checkbox"]:checked+.input-helper:before {
            background: #405189;
            border-width: 0
        }

        .form-check .form-check-label input[type="checkbox"]+.input-helper:before {
            content: "";
            width: 18px;
            height: 18px;
            border-radius: 2px;
            border: solid #405189;
            border-width: 2px;
            -webkit-transition: all;
            -moz-transition: all;
            -ms-transition: all;
            -o-transition: all;
            transition: all;
            transition-duration: 0s;
            -webkit-transition-duration: 250ms;
            transition-duration: 250ms
        }

        .form-check .form-check-label input[type="checkbox"]+.input-helper:after {
            font-family: FontAwesome;
            content: "\f095";
            display: inline-block;
            padding-right: 3px;
            vertical-align: middle;
            color: #fff
        }

        .text-primary,
        .list-wrapper .completed .remove {
            color: #405189 !important
        }

        .list-wrapper .remove {
            cursor: pointer;
            font-size: 1.438rem;
            font-weight: 600;
            width: 1.25rem;
            height: 1.25rem;
            line-height: 20px;
            text-align: center
        }

        .ml-auto,
        .list-wrapper .remove,
        .mx-auto {
            margin-left: auto !important
        }

        .mdi-close-circle-outline:before {
            content: "\F15A"
        }

        .list-wrapper ul li {
            font-size: .9375rem;
            padding: .4rem 0;
            border-bottom: 1px solid #f3f3f3
        }

        .mdi:before {
            font-family: FontAwesome;
            content: "\f00d";
            display: inline-block;
            padding-right: 3px;
            vertical-align: middle;
            font-size: .756em;
            color: #405189
        }

        .list-wrapper ul {
            padding: 0;
            text-align: left;
            list-style: none;
            margin-bottom: 0
        }

        .flex-column-reverse {
            flex-direction: column-reverse !important
        }

        .d-flex,
        .loader-demo-box,
        .distribution-chart-legend .distribution-chart,
        .distribution-chart-legend .distribution-chart .item,
        .list-wrapper ul li,
        .email-wrapper .mail-sidebar .menu-bar .profile-list-item a,
        .email-wrapper .mail-sidebar .menu-bar .profile-list-item a .user,
        .email-wrapper .mail-list-container .mail-list .details,
        .email-wrapper .message-body .attachments-sections ul li .thumb,
        .email-wrapper .message-body .attachments-sections ul li .details .buttons,
        .lightGallery .image-tile .demo-gallery-poster,
        .swal2-modal,
        .navbar .navbar-menu-wrapper .navbar-nav,
        .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-profile,
        .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .navbar-dropdown .dropdown-item {
            display: flex !important
        }
        .remove {
            min-height: 50px;
            min-width: 60px;
        }
    </style>
    <script>
        function remove(el) {
            let element = document.getElementById(el);
            element.remove();
            /* TODO: write out the ajax for deleting and rearranging */
        }
    </script>
    <body class="antialiased">
            <div class="page-content page-container" id="page-content">
                <div class="padding">
                    <div class="row container d-flex justify-content-center">
                        <div class="col-md-12">
                            <div class="card px-3">
                                <div class="card-body">
                                    <h4 class="card-title">To Do List</h4>
                                    <div class="add-items">
                                        <form action="{{ route('todo.store') }}" method="POST">
                                            @csrf
                                            <div class="input-group">
                                                <input name="task" type="text" class="form-control todo-list-input @error('task') is-invalid @enderror" placeholder="What is the task called and when is it due?" required>
                                                <input name="due_date" class="form-control" type="datetime-local" @error('due_date') is-invalid @enderror required><button class="add btn btn-primary font-weight-bold todo-list-add-btn" type="submit">Add</button>
                                            </div>
                                        </form>

                                    </div>
                                    <div class="list-wrapper">
                                        <ul class="d-flex flex-column-reverse todo-list">
                                            @foreach($todos as $todo)
                                                <li id="todo_item_{{ $todo->id }}">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="checkbox" type="checkbox" {{ ($todo->status) ? ('checked') : ('')  }} > Task: {{ $todo->task }} | Due Date: {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s',  $todo->due_date)->diffForHumans() }}<i class="input-helper"></i>
                                                        </label>
                                                    </div>
                                                    <button type="button" class="remove btn btn-danger right" onclick="remove('todo_item_{{ $todo->id }}')">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
                                                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>
                                                        </svg>
                                                    </button>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </body>
</html>
