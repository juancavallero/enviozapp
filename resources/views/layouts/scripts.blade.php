            <!-- BEGIN CORE PLUGINS -->
            <script src="{{asset('assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('assets/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('assets/global/plugins/js.cookie.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('assets/global/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('assets/global/plugins/bootstrap-confirmation/bootstrap-confirmation.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('assets/global/plugins/bootstrap-modal/js/bootstrap-modalmanager.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('assets/global/plugins/bootstrap-modal/js/bootstrap-modal.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('assets/global/plugins/jquery-multi-select/js/jquery.multi-select.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('assets/global/plugins/select2/js/select2.full.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('assets/global/scripts/datatable.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('assets/global/plugins/datatables/datatables.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('assets/pages/scripts/table-datatables-managed.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('assets/global/plugins/jquery-validation/js/jquery.validate.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('assets/global/plugins/jquery-validation/js/localization/messages_es_AR.js')}}" type="text/javascript" ></script>
            <script src="{{asset('assets/global/plugins/jquery-validation/js/additional-methods.min.js')}}" type="text/javascript"></script>
            <!-- END CORE PLUGINS -->
            <!-- BEGIN PAGE LEVEL PLUGINS -->
            <script src="{{asset('assets/global/plugins/moment.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('assets/global/plugins/bootstrap-datepicker/locales/bootstrap-datepicker.es.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('assets/global/plugins/fullcalendar/fullcalendar.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('assets/global/plugins/dropzone/dropzone.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('assets/pages/scripts/form-dropzone.js')}}" type="text/javascript"></script>
            <!-- END PAGE LEVEL PLUGINS -->
            <!-- BEGIN THEME GLOBAL SCRIPTS -->
            <script src="{{env('APP_ENV') == 'local'?asset('assets/global/scripts/app.js'):asset('assets/global/scripts/app.min.js')}}" type="text/javascript"></script>
            <!-- END THEME GLOBAL SCRIPTS -->
            <!-- BEGIN THEME LAYOUT SCRIPTS -->
            <script src="{{asset('assets/layouts/layout2/scripts/layout.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('assets/layouts/layout2/scripts/demo.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('assets/layouts/global/scripts/quick-sidebar.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('assets/layouts/global/scripts/quick-nav.min.js')}}" type="text/javascript"></script>
            <!-- END THEME LAYOUT SCRIPTS -->
            <script src="{{env('APP_ENV') == 'local'?asset('js/custom.js'):asset('js/custom.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('assets/pages/scripts/components-date-time-pickers.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('js/ckeditor/ckeditor.js')}}"></script>
            @yield('scripts')