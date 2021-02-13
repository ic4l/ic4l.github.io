<!-- base vendor bundle:
DOC: if you remove pace.js from core please note on Internet Explorer some CSS animations may execute before a page is fully loaded, resulting 'jump' animations
    + pace.js (recommended)
    + jquery.js (core)
    + jquery-ui-cust.js (core)
    + popper.js (core)
    + bootstrap.js (core)
    + slimscroll.js (extension)
    + app.navigation.js (core)
    + ba-throttle-debounce.js (core)
    + waves.js (extension)
    + smartpanels.js (extension)
    + src/../jquery-snippets.js (core) -->
<script src="<?= base_url('_assets/_admin'); ?>/js/vendors.bundle.js"></script>
<script src="<?= base_url('_assets/_admin'); ?>/js/app.bundle.js"></script>
<script type="text/javascript">
    /* Activate smart panels */
    $('#js-page-content').smartPanel();

</script>
<!-- The order of scripts is irrelevant. Please check out the plugin pages for more details about these plugins below: -->
<script src="<?= base_url('_assets/_admin'); ?>/js/statistics/peity/peity.bundle.js"></script>
<script src="<?= base_url('_assets/_admin'); ?>/js/statistics/flot/flot.bundle.js"></script>
<script src="<?= base_url('_assets/_admin'); ?>/js/statistics/easypiechart/easypiechart.bundle.js"></script>

<script src="<?= base_url('_assets/_admin'); ?>/js/formplugins/inputmask/inputmask.bundle.js"></script>
<script>
    $(document).ready(function()
    {
        $(":input").inputmask();
    });

</script>

<script src="<?= base_url('_assets/_admin'); ?>/js/datagrid/datatables/datatables.bundle.js"></script>
<script>
    /* demo scripts for change table color */
    /* change background */


    $(document).ready(function()
    {
        $('#tbl1').dataTable(
        {
            responsive: true
        });

    });

</script>

<script type="text/javascript">
    /* Activate smart panels */
    $('#js-page-content').smartPanel();

</script>

<script src="<?= base_url('_assets/_admin'); ?>/js/formplugins/bootstrap-datepicker/bootstrap-datepicker.js"></script>
<script src="<?= base_url('_assets/_admin'); ?>/js/formplugins/bootstrap-daterangepicker/bootstrap-daterangepicker.js"></script>

<script>
    // Class definition

    var controls = {
        leftArrow: '<i class="fal fa-angle-left" style="font-size: 1.25rem"></i>',
        rightArrow: '<i class="fal fa-angle-right" style="font-size: 1.25rem"></i>'
    }

    var runDatePicker = function()
    {
      $('#datepicker-1, #datepicker-modal-2').daterangepicker(
      {
          opens: 'left',
      }, function(start, end, label)
      {
          console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
      });

      // orientation
      $('#datepicker-4-1').datepicker(
      {
          format: 'dd/mm/yyyy',
          todayHighlight: true,
          templates: controls
      });

      // range picker
      $('#datepicker-5').datepicker(
      {
          format: 'dd/mm/yyyy',
          todayHighlight: true,
          templates: controls
      });

    }

    $(document).ready(function()
    {
        runDatePicker();
    });

</script>

<script src="<?= base_url('_assets/_admin'); ?>/js/miscellaneous/lightgallery/lightgallery.bundle.js"></script>
<script>
    $(document).ready(function()
    {
        var $initScope = $('#js-lightgallery');
        if ($initScope.length)
        {
            $initScope.justifiedGallery(
            {
                border: -1,
                rowHeight: 150,
                margins: 8,
                waitThumbnailsLoad: true,
                randomize: false,
            }).on('jg.complete', function()
            {
                $initScope.lightGallery(
                {
                    thumbnail: true,
                    animateThumb: true,
                    showThumbByDefault: true,
                });
            });
        };
        $initScope.on('onAfterOpen.lg', function(event)
        {
            $('body').addClass("overflow-hidden");
        });
        $initScope.on('onCloseAfter.lg', function(event)
        {
            $('body').removeClass("overflow-hidden");
        });
    });

</script>

<!-- The order of scripts is irrelevant. Please check out the plugin pages for more details about these plugins below: -->
<script src="<?= base_url('_assets/_admin'); ?>/js/dependency/moment/moment.js"></script>
<script src="<?= base_url('_assets/_admin'); ?>/js/miscellaneous/fullcalendar/fullcalendar.bundle.js"></script>
<script src="<?= base_url('_assets/_admin'); ?>/js/statistics/sparkline/sparkline.bundle.js"></script>
<script src="<?= base_url('_assets/_admin'); ?>/js/statistics/easypiechart/easypiechart.bundle.js"></script>
<script src="<?= base_url('_assets/_admin'); ?>/js/statistics/flot/flot.bundle.js"></script>
<script src="<?= base_url('_assets/_admin'); ?>/js/miscellaneous/jqvmap/jqvmap.bundle.js"></script>
