                <div class="footer-wrapper">
                    <div class="footer-section f-section-1">
                        <p class="">Copyright © 2020 <a target="_blank" href="https://designreset.com/">DesignReset</a>, All rights reserved.</p>
                    </div>
                    <div class="footer-section f-section-2">
                        <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></p>
                    </div>
                </div>

            </div>
        </div>
        <!--  END CONTENT PART  -->

    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="/assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="/bootstrap/js/popper.min.js"></script>
    <script src="/bootstrap/js/bootstrap.min.js"></script>
    <script src="/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="/assets/js/app.js"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="/assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="/plugins/apex/apexcharts.min.js"></script>
    <script src="/assets/js/dashboard/dash_2.js"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="/plugins/table/datatable/datatables.js"></script>
    <script src="/plugins/table/datatable/custom_miscellaneous.js"></script>
    <script src="/plugins/sweetalerts/sweetalert2.min.js"></script>
    <script src="/plugins/sweetalerts/custom-sweetalert.js"></script>
    <script src="/assets/js/ajax.actions.js"></script>
    <script>
        $('#multi-column-ordering').DataTable({
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
               "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 7,
	        columnDefs: [ {
	            targets: [ 0 ],
	            orderData: [ 0, 1 ]
	        }, {
	            targets: [ 1 ],
	            orderData: [ 1, 0 ]
	        }, {
	            targets: [ 4 ],
	            orderData: [ 4, 0 ]
	        } ]
	    });
    </script>
    <!-- END PAGE LEVEL SCRIPTS -->
     <!-- toastr -->
    <script src="/plugins/notification/snackbar/snackbar.min.js"></script>
    <!-- END PAGE LEVEL PLUGINS -->

    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <script src="/assets/js/components/notification/custom-snackbar.js"></script>
    <!--  END CUSTOM SCRIPTS FILE  -->

    <script src="/plugins/editors/markdown/simplemde.min.js"></script>
    <script src="/plugins/editors/markdown/custom-markdown.js"></script>
</body>
</html>
