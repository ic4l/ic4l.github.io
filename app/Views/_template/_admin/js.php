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
<script src="<?= base_url('_assets/_admin'); ?>/js/datagrid/datatables/datatables.bundle.js"></script>
