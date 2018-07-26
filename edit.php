<?php 

include_once('_header.php');  
if (isset($_REQUEST['id'])) {
  $id=$_REQUEST['id'];

  $employes=  $DB->query("SELECT * FROM employes WHERE employe_id=".$id );
  $employes=$employes[0];
   
  $salary_slip=  $DB->query("SELECT * FROM salary_slip WHERE employe_id=".$id );
  
  





}else{

}

?> 
 
<link href="<?php echo ASSETS_URL;?>css/register.css" rel="stylesheet"> 




<link href="<?php echo ASSETS_URL;?>css/table.css" rel="stylesheet">


<script type="text/javascript" src="<?php echo ASSETS_URL;?>js/jquery.js"></script>    
<!-- <script type="text/javascript" src="<?php echo ASSETS_URL;?>bootstrap/js/bootstrap.min.js"></script> -->

<!-- <script type="text/javascript" src="<?php echo ASSETS_URL;?>js/admin.js"></script> -->



  
    <!-- DataTables Initialization -->
  <script type="text/javascript" src="<?php echo ASSETS_URL;?>js/datatables/jquery.dataTables.js"></script>
        <script type="text/javascript" charset="utf-8">
            $(document).ready(function () {
                $('#dt1').dataTable();
            });
  </script>
 


  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>  



    





<link href="<?php echo ASSETS_URL;?>css/custom.css" rel="stylesheet"> 
<style type="text/css">
    .bs-example{
        font-family: sans-serif;
        position: relative;
        margin: 50px;
    }
    .typeahead, .tt-query, .tt-hint {
        border: 2px solid #CCCCCC;
        /*border-radius: 8px;*/
         
        line-height: 30px;
        outline: medium none;
        padding: 2px 2px;
        /*width: auto;*/
    }
    .typeahead {
        background-color: #FFFFFF;
    }
    .typeahead:focus {
        border: 2px solid #0097CF;
    }
    .tt-query {
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
    }
    .tt-hint {
        color: transparent !important;
    }
    .tt-dropdown-menu {
        background-color: #f9f9f9;
        border: 1px solid rgb(255, 255, 255);
        /* border-radius: 8px; */
        border-top: 0;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        margin-top: 0px;
        padding: 0px 0;
        /* width: 422px; */
        width: 100%;
    }
    .tt-suggestion {
        /*font-size: 24px;
        line-height: 24px;*/
        padding: 3px 20px;
    }
    .tt-suggestion.tt-is-under-cursor {
        background-color: #7a939c;
        color: #FFFFFF;
    }
    .tt-suggestion p {
        margin: 0;
    }
    #register-info ul.typeahead{
        text-align: left;
        color: white;
        font-size: 13px;
        min-width: 110px;
    }
    #register-info ul.typeahead li{
        margin-bottom: 0px;
    }
    .info-user2 {
        text-align: center;
        font-size: 18px;
    }
</style>







     
  <div class="container" style="width:  100%;"> 

      <!-- CONTENT -->
   

  <div class="row">
    <div class="col-lg-4">
        <form id="employe" action="save.php" method="POST">
          
        
      <div class="register-info-wraper">
        <div id="register-info">
          <div class="cont2">
           
         <div class="source_option">
           
          <h2>Employe</h2>
         
         </div>  


        
          </div>

          <div class="row">
            <div class="form-group form-group-sm">
              <label class="col-sm-4 col-lg-2 control-label" for="fname">
                First Name</label>
              <div class="col-sm-6 col-lg-4">
                <input class="form-control" type="text" id="fname" name="fname" placeholder="" value="<?php echo $employes['fname']; ?>"> 
              </div>

              <label class="col-sm-4 col-lg-2 control-label" for="lname">
                Last Name</label>
              <div class="col-sm-6 col-lg-4">
                <input class="form-control" type="text" id="lname" name="lname" placeholder=""  value="<?php echo $employes['lname']; ?>">
              </div>


            </div>
          </div>
          <div class="row">
            <div class="form-group form-group-sm">
              <label class="col-sm-4 col-lg-2 control-label" for="email">
                Email</label>
              <div class="col-sm-8 col-lg-10">
                <input class="form-control" type="text" id="email" name="email" placeholder="" value="<?php echo $employes['email']; ?>">
              </div>

             


            </div>
          </div>
          <div class="row">
            <div class="form-group form-group-sm">
               <label class="col-sm-4 col-lg-2 control-label" for="dob">
                              DOB</label>
                <div class="col-sm-6 col-lg-4">

                  
                  <input class="form-control" id="dob" name="dob" value="<?php echo $employes['dob']; ?>" placeholder="MM/DD/YYYY" type="text"/>

                </div>

                <label class="col-sm-4 col-lg-2 control-label" for="join_date">
                              Join Date</label>
                <div class="col-sm-6 col-lg-4">

                  
                  <input class="form-control" id="join_date" name="join_date" value="<?php echo $employes['join_date']; ?>" placeholder="MM/DD/YYYY" type="text"/>
                 


                  
                </div>

               


            </div>
          </div>
          <div class="row">
            <div class="form-group form-group-sm">
                <label class="col-sm-4 col-lg-2 control-label" for="duty">
                Designation</label>
              <div class="col-sm-8 col-lg-10">
                <input class="form-control" type="text" id="duty" name="duty" placeholder="HR" value="<?php echo $employes['duty']; ?>">
              </div>

               


            </div>
          </div>
           

            



           
      <hr style="margin: 0px;">
       
       
        <div class="info-user2  "> 
          <!-- <span aria-hidden="true" class="li_user fs1"> </span> -->
          <input type="hidden" style="margin-top:  5px;" name="employe_id" value="<?php echo $employes['employe_id']; ?>" >
          <span aria-hidden="true" id="save_script" style="margin-top:  5px;" class="li_settings fs1 btn btn-default">SAVE</span>
          <!-- <span aria-hidden="true" class="li_mail fs1"></span>
          <span aria-hidden="true" class="li_key fs1"></span>
          <span aria-hidden="true" class="li_lock fs1"></span>
          <span aria-hidden="true" class="li_pen fs1"></span> -->
        </div>

          
        </div>
      </div>
    
    </div>


    <div class="col-lg-8">
      <div class="register-info-wraper">
        <div id="info-detail2">
          
        </div>
        </form>
        
          
        <h3>Salary Slip</h3>
        <table id="salary_table" class="display">
            <thead>
              <tr>
                <th>Record ID</th>
                <th>Salary Date</th>
                <th>Basic Pay</th>
                <th>Net Salary</th> 
              </tr>
            </thead>
            <tbody>
              <?php
              $total=0;

               foreach ($salary_slip as $key => $value) { 
                 $total= $total+$value['net_salary']; ?>
                 <tr class="odd">
                  <th><?php echo $value['salary_slip_id'];?></th>
                  <th><?php echo $value['salary_date'];?></th>
                  <th><?php echo $value['basic_pay'];?></th>
                  <th><?php echo $value['net_salary'];?></th> 
                  <th>  <a href="<?= BASE_URL.'print_slip.php?id='.$value['salary_slip_id']; ?> " class="btn btn-info" target="_blank" >print</a></th> 
                </tr>
              <?php } ?>
                
            </tbody>
            <tfoot>
              
              
              <tr class="odd">                
                <td style="text-align: right;" colspan="3">Grand Total</td>
                <td class="center"><?php echo $total; ?></td>
                 
              </tr>

               
               
            
              
            </tfoot>
           </table><!--/END First Table -->
   

      </div>
      
      





    </div>






  </div>




     </div> <!-- /container -->



<!-- Include Date Range Picker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
<!-- ajax form submit -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js" integrity="sha384-FzT3vTVGXqf7wRfy8k4BiyzvbNfeYjK+frTVqZeNDFl8woCbF0CYG6g2fMEFFo/i" crossorigin="anonymous"></script>
<!--custom script for form -->
<script type="text/javascript" src="<?php echo ASSETS_URL;?>js/add_job_form.js"></script>
<script>
  $(document).ready(function(){
    var date_input=$('input[name="date"]'); //our date input has the name "date"
    var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
    date_input.datepicker({
      format: 'mm/dd/yyyy',
      container: container,
      todayHighlight: true,
      autoclose: true,
    });


    $("#save_script").click(function(){
        console.log("kiked");
        //$("#add_job_form").submit(); bill_details
        //$("#bill_details").ajaxSubmit({url: 'save.php', type: 'post'});



          $.ajax({
            type: "POST",
            dataType: "text",
            url: "save.php",
            data: $("#employe").serialize(),
            success: function(data)
            {   
               alert("succesfully saved.");
               window.location.replace("<?php echo BASE_URL; ?>index.php");
            }
          });






    });






  });

  

</script>








  <?php include_once("_footer.php");