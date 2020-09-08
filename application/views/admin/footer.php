<?php
$tanggal= mktime(date("m"),date("d"),date("Y"));
echo "Tanggal : <b>".date("d-M-Y", $tanggal)."</b> ";
date_default_timezone_set('Asia/Jakarta');
$jam=date("H:i:s");
echo "| Pukul : <b>". $jam." "."</b>";
$a = date ("H");
?>

</div>
<script type="text/javascript">
$(document).ready(function(){
  $("#table-datatable").dataTable();
});
</script>
</body>
</html>
<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url().'assets/vendor/jquery/jquery.min.js'?>"></script>
<script src="<?=base_url()?>assets/js/chosen.jquery.min.js"></script>
<script src="<?php echo base_url().'assets/vendor/bootstrap/js/bootstrap.bundle.min.js'?>"></script>

<!-- Core plugin JavaScript-->
<script src="<?php echo base_url().'assets/vendor/jquery-easing/jquery.easing.min.js'?>"></script>

<!-- Page level plugin JavaScript-->
<script src="<?php echo base_url().'assets/vendor/chart.js/Chart.min.js'?>"></script>
<script src="<?php echo base_url().'assets/vendor/datatables/jquery.dataTables.js'?>"></script>
<script src="<?php echo base_url().'assets/vendor/datatables/dataTables.bootstrap4.js'?>"></script>

<!-- Custom scripts for all pages-->
<script src="<?php echo base_url().'assets/js/sb-admin.min.js'?>"></script>

<!-- Demo scripts for this page-->
<script src="<?php echo base_url().'assets/js/demo/datatables-demo.js'?>"></script>
<script src="<?php echo base_url().'assets/js/demo/chart-area-demo.js'?>"></script>
<script src="<?php echo base_url().'assets/js/demo/chart-bar-demo.js'?>"></script>
<script src="<?php echo base_url().'assets/js/demo/chart-pie-demo.js'?>"></script>
