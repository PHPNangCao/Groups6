<!-- jQuery -->
<script src="api-admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="api-admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="api-admin/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="api-admin/dist/js/demo.js"></script>

<script src="api-admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="api-admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="api-admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>

<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
    });

    function checkDelete(msg){
      if(window.confirm(msg) == true){
        return true;
      }
      return false;
    }
</script>