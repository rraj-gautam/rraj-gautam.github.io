<?php 

include_once('_header.php'); 
//require_once(dirname(__FILE__).'/../libs/config.php');
$jibs=$DB->query("SELECT * FROM `employes`  ORDER BY `employe_id` DESC");
 
?>
<!-- DATA TABLE CSS -->
    <link href="<?php echo ASSETS_URL;?>css/table.css" rel="stylesheet">


    <script type="text/javascript" src="<?php echo ASSETS_URL;?>js/jquery.js"></script>    
    <script type="text/javascript" src="<?php echo ASSETS_URL;?>bootstrap/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="<?php echo ASSETS_URL;?>js/admin.js"></script>
    


  
  	<!-- DataTables Initialization -->
    <script type="text/javascript" src="<?php echo ASSETS_URL;?>js/datatables/jquery.dataTables.js"></script>
  			<script type="text/javascript" charset="utf-8">
  			    $(document).ready(function () {
  			        $('#dt1').dataTable();
  			    });
	</script>
    <div class="container">

      <!-- CONTENT -->
	<div class="row">
		<div class="col-sm-12 col-lg-12">
      <h4>
        <a href="add.php" class="btn btn-primary">Add New</a>
      </h4>
			 
 
			 <!--SECOND Table -->


		 

		<table class="display" id="dt1">
        <thead>
          <tr>
            <th>Name </th>
            <th>Email</th>
            <th>Designation</th>
            <th>Join Date</th> 
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php 
            $class="even gradeC";

            foreach ($jibs as $key => $value) {
            ?>
            <tr class="odd gradeA" id="tr<?php echo $value['employe_id'];?>">
              <td><?= $value['fname'].' '.$value['lname'];?></td>
              <td><?= $value['email'];?></td>
              <td><?= $value['duty'];?></td>
              <td><?= $value['join_date'];?></td> 
              <td>
                <a href="<?php echo BASE_URL.'view.php?id='.$value['employe_id'];?>">
                  <span class="glyphicon glyphicon-eye-open"></span>
                </a>
                <a href="<?php echo BASE_URL.'edit.php?id='.$value['employe_id'];;?>">
                  <span class="glyphicon glyphicon-pencil"></span>
                </a>
                <span onclick="delete_modal(<?= $value['employe_id'];?>)" class="glyphicon glyphicon-remove-circle btn"></span>
              </td>
            </tr>

            <?php
          }?>
          
           
        </tbody>
      </table><!--/END SECOND TABLE -->
	
		</div><!--/span12 -->
      </div><!-- /row -->
     </div> <!-- /container -->










 

<!-- Modal -->
<div id="deleteConfirm" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Delete this record</h4>
      </div>
      <div class="modal-body">
        <p>Do you want to delete this record?.</p>
        <input type="hidden" id="id" name="id">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" onclick="delete_job()" data-dismiss="modal">Yes</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
      </div>
    </div>

  </div>
</div>



	<?php include_once("_footer.php"); ?>
  <script type="text/javascript">
    function delete_modal(id){
      $("#id").val(id);
      $('#deleteConfirm').modal('show');
    }
    function delete_job(){
        var id=$("#id").val();
        var saveData = $.ajax({
        url:"<?= BASE_URL.'delete.php';?>",
        method:"POST",
        data:{value:id},
        dataType:"text",
        success:function(data)
        {
           if(data=="success"){ 
            //$("#tr"+id).remove();            
            $("#tr"+id).hide('slow', function(){ $("#tr"+id).remove(); });
            //$('.display').reload();
            $('.display').DataTable().ajax.reload();
           }else{
            alert("Something went wrong");
           }
          
        }
       

       });
         saveData.error(function() { alert("Something went wrong"); });
    }
  </script>