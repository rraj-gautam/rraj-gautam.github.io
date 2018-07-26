//
$(document).on('focusout','#order_for_1',function() {
        // $(this).css("background-color", "#ff0000");

        
        var order_for_1=$("#order_for_1").val();
        var order_for_2=$("#order_for_2").val();
        var order_for_3=$("#order_for_3").val();
        var order_for_4=$("#order_for_4").val();
        console.log("color 1 :"+order_for_1);

        

        if (order_for_1.length !=0  ) {
          

 
          var row=1;
          tmp_html='';
          $("#tr_order_for_1").remove();
             

          add_new_tr("tr_order_for_1",order_for_1,0,1);
                

        }else{
          //console.log("field is empty");
        }


});

$(document).on('focusout','#order_for_2',function() {
        // $(this).css("background-color", "#ff0000");

        
        var order_for_1=$("#order_for_1").val();
        var order_for_2=$("#order_for_2").val();
        var order_for_3=$("#order_for_3").val();
        var order_for_4=$("#order_for_4").val();
        console.log("color 1 :"+order_for_1);

        

        if (order_for_1.length !=0  ) {
          

 
          var row=1;
          tmp_html='';
          $("#tr_order_for_1").remove();
             

          add_new_tr("tr_order_for_1",order_for_1,0,1);
                

        }else{
          //console.log("field is empty");
        }


});

$(document).on('focusout','#order_for_3',function() {
        // $(this).css("background-color", "#ff0000");

        
        var order_for_1=$("#order_for_1").val();
        var order_for_2=$("#order_for_2").val();
        var order_for_3=$("#order_for_3").val();
        var order_for_4=$("#order_for_4").val();
        console.log("color 1 :"+order_for_1);

        

        if (order_for_1.length !=0  ) {
          

 
          var row=1;
          tmp_html='';
          $("#tr_order_for_1").remove();
             

          add_new_tr("tr_order_for_1",order_for_1,0,1);
                

        }else{
          //console.log("field is empty");
        }


});

$(document).on('focusout','#order_for_4',function() {
        // $(this).css("background-color", "#ff0000");

        
        var order_for_1=$("#order_for_1").val();
        var order_for_2=$("#order_for_2").val();
        var order_for_3=$("#order_for_3").val();
        var order_for_4=$("#order_for_4").val();
        console.log("color 1 :"+order_for_1);

        

        if (order_for_1.length !=0  ) {
          

 
          var row=1;
          tmp_html='';
          $("#tr_order_for_1").remove();
             

          add_new_tr("tr_order_for_1",order_for_1,0,1);
                

        }else{
          //console.log("field is empty");
        }


});







//dtp repete row 
// $("#dtp_option_13").focusout(function(){
$(document).on('focusout','#dtp_option_13',function() {
        // $(this).css("background-color", "#ff0000");

        var row=$(this).attr('data-row');
        console.log("row number :"+row);
        var opttion_1=$("#dtp_option_"+row+"1").val();
        console.log("option 1 :"+opttion_1);

        //var opttion_3=$("#dtp_option_"+row+"3").val();
        var opttion_3=$("#dtp_option_13").val();
        console.log("option 3 :"+opttion_3);

        if (opttion_1.length !=0 && opttion_1!='None'  && opttion_3.length !=0 ) {
        	

        	var next_row=parseInt(row)+1;
          $("#dtp_option_13").attr("id","newId"+next_row);

        	$("#dtp_option_row1").attr("row-count",next_row);
        	//add next dtp fields
        	var tmp_html='<div class="row" id="dtp_option_row'+next_row+'" data-row="'+next_row+'" >'+
	            '<div class="form-group form-group-sm">'+
	            '  <label class="col-sm-4 col-lg-2 control-label" for="dtp_option_1">'+
	            '     <span class="glyphicon glyphicon-remove-sign" onclick="remove_dtp_row(\'dtp_option_row'+next_row+'\')" style="color: #943030;"></span>DTP </label>'+
	            ' <div class="col-sm-4 col-lg-4">'+
	            '   <input class="form-control dtp_option_1" type="text" data-row="'+next_row+'" id="dtp_option_'+next_row+'1" name="dtp_option_1[]" placeholder="">'+
	            '  </div>'+
	            '  <div class="col-sm-2 col-lg-2">'+
	            '    <input class="form-control dtp_option_2" type="text" data-row="'+next_row+'" id="dtp_option_'+next_row+'2" name="dtp_option_2[]" placeholder="">'+
	            '  </div>'+
	            '  <div class="col-sm-4 col-lg-4">'+
	            '    <input class="form-control dtp_option_3" type="text" data-row="'+next_row+'" id="dtp_option_13" xxid="dtp_option_'+next_row+'3" name="dtp_option_3[]" placeholder="">'+
	            '  </div>'+

	            '</div>'+
	          '</div>';
	         // $("#dtp_option_row"+row).after(tmp_html);

	          //add dtp price into estimate
            add_new_tr('tr_dtp_option_row'+row,'DTP ',0,1);
	          tmp_html='<tr class="odd" id="tr_dtp_option_row'+row+'">'+
                '<td><input type="text" name="product[]" value="DTP" disabled></td>'+
                '<td><input type="number" name="rate[]" value=""></td>'+
                '<td><input type="number" name="qty[]" value="1"></td>'+
                '<td class="center"> <input type="number" name="total[]" value=""></td>'+ 
              	'</tr>';

            //$('tbody').append(tmp_html);

        }else{
        	//console.log("field is empty");
        }


});
//add dtp option by button
function add_dtp_row(){
	var row=$("#dtp_option_row1").attr('row-count');


  console.log("row number :"+row);
  var opttion_1=$("#dtp_option_"+row+"1").val();
  console.log("option 1 :"+opttion_1);

  //var opttion_3=$("#dtp_option_"+row+"3").val();
  var opttion_3=$("#dtp_option_13").val();
  console.log("option 3 :"+opttion_3);

  if (opttion_1.length !=0 && opttion_3.length !=0 ) {








	var next_row=parseInt(row)+1;
  $("#dtp_option_13").attr("id","newId"+next_row);
	$("#dtp_option_row1").attr("row-count",next_row);
	//add next dtp fields
	var tmp_html='<div class="row" id="dtp_option_row'+next_row+'" data-row="'+next_row+'">'+
        '<div class="form-group form-group-sm">'+
        '  <label class="col-sm-4 col-lg-2 control-label" for="dtp_option_1">'+
        '     <span class="glyphicon glyphicon-remove-sign" onclick="remove_dtp_row(\'dtp_option_row'+next_row+'\')" style="color: #943030;"></span> DTP </label>'+
        ' <div class="col-sm-4 col-lg-4">'+
        '   <input class="form-control dtp_option_1" type="text" data-row="'+next_row+'" id="dtp_option_'+next_row+'1" name="dtp_option_1[]" placeholder="">'+
        '  </div>'+
        '  <div class="col-sm-2 col-lg-2">'+
        '    <input class="form-control dtp_option_2" type="text" data-row="'+next_row+'" id="dtp_option_'+next_row+'2" name="dtp_option_2[]" placeholder="">'+
        '  </div>'+
        '  <div class="col-sm-4 col-lg-4">'+
        '    <input class="form-control dtp_option_3" type="text" data-row="'+next_row+'" id="dtp_option_13" xxid="dtp_option_'+next_row+'3" name="dtp_option_3[]" placeholder="">'+
        '  </div>'+

        '</div>'+
      '</div>';
      $("#dtp_option_row"+row).after(tmp_html);
    }else{
      console.log("please fill out last DTP colomuns");
    }
}
function remove_dtp_row(id){
	var row=$("#dtp_option_row1").attr('row-count');
	var selected_row=$("#"+id).attr('data-row');
  //$("#"+id+" .dtp_option_3" ).attr('id')"#dtp_option_13";
	if (row==selected_row) {
		var	row_count=parseInt(row)-1;
		$("#dtp_option_row"+row_count+" .dtp_option_3").attr("id","dtp_option_13");
    $("#dtp_option_row1").attr("row-count",row_count);
		
		console.log("same row selected");
	}else{

		console.log("not same row");
	}
	$("#"+id).remove();
  $("#tr_"+id).remove();
}





//add aditional colour field

$(document).on('focusout','#printing_color11',function() {
        // $(this).css("background-color", "#ff0000");

        var row=$(this).attr('data-row');
        console.log("row number :"+row);
        var color=$("#printing_color11").val();
        console.log("color 1 :"+color);

        

        if (color.length !=0 ) {
        	


        	var next_row=parseInt(row)+1;
          $("#printing_color11").attr("id","newId"+next_row);
        	$("#printing_size_row1").attr("row-count",next_row);
        	//add next dtp fields
        	var tmp_html='<div class="row" id="printing_size_row'+next_row+'" data-row="'+next_row+'" >'+
	            '<div class="form-group form-group-sm">'+
	            '  <label class="col-sm-4 col-lg-2 control-label" for="dtp_option_1">'+
	            '     </label>'+
	            ' <div class="col-sm-4 col-lg-4">'+
	            '   '+
	            '  </div>'+
	            
	            ' <label class="col-sm-4 col-lg-2 control-label" style="text-align: right;" for="printing_color">'+
              	'	<span class="glyphicon glyphicon-remove-sign" onclick="remove_color_row(\'printing_size_row'+next_row+'\')" style="color: #943030;"></span>   Colour </label>'+



	            '  <div class="col-sm-4 col-lg-4">'+
	            '    <input class="form-control printing_color" type="text" data-row="'+next_row+'" id="printing_color11" xxid="dtp_option_'+next_row+'3" name="printing_color[]" placeholder="">'+
	            '  </div>'+

	            '</div>'+
	          '</div>';
	          $("#printing_size_row"+row).after(tmp_html);



	          add_new_tr('tr_printing_size_row'+row,'Colour '+color,0,1);
            tmp_html='<tr class="odd" id="tr_printing_size_row'+row+'">'+
                '<td><input type="text" name="product[]" value="Colour :'+color+'" disabled></td>'+
                '<td><input type="number" name="rate[]" value=""></td>'+
                '<td><input type="number" name="qty[]" value="1"></td>'+
                '<td class="center"> <input type="number" name="total[]" value=""></td>'+ 
              	'</tr>';

            //$('tbody').append(tmp_html);

	          //add dtp price into estimate


        }else{
        	//console.log("field is empty");
        }


});
//add dtp option by button
function add_color_row(){
	var row=$("#printing_size_row1").attr('row-count');
	var next_row=parseInt(row)+1;
  var color=$("#printing_color11").val();
  if (color.length !=0 ) {
    $("#printing_color11").attr("id","newId"+next_row);
    $("#printing_size_row1").attr("row-count",next_row);
    //add next dtp fields
    var tmp_html='<div class="row" id="printing_size_row'+next_row+'" data-row="'+next_row+'" >'+
	            '<div class="form-group form-group-sm">'+
	            '  <label class="col-sm-4 col-lg-2 control-label" for="dtp_option_1">'+
	            '     </label>'+
	            ' <div class="col-sm-4 col-lg-4">'+
	            '   '+
	            '  </div>'+
	            
	            ' <label class="col-sm-4 col-lg-2 control-label" style="text-align: right;" for="printing_color">'+
              	'	<span class="glyphicon glyphicon-remove-sign" onclick="remove_color_row(\'printing_size_row'+next_row+'\')" style="color: #943030;"></span>   Colour </label>'+



	            '  <div class="col-sm-4 col-lg-4">'+
	            '    <input class="form-control printing_color" type="text" data-row="'+next_row+'" id="printing_color11" xxid="dtp_option_'+next_row+'3" name="printing_color[]" placeholder="">'+
	            '  </div>'+

	            '</div>'+
	          '</div>';
      $("#printing_size_row"+row).after(tmp_html);
    }else{
      $("#printing_color11").focus();
      console.log("fill out all last color field");
    }
}
function remove_color_row(id){
	var row=$("#printing_size_row1").attr('row-count');
	var selected_row=$("#"+id).attr('data-row');
	if (row==selected_row) {
		var	row_count=parseInt(row)-1;
    $("#printing_size_row"+row_count+" .printing_color").attr("id","printing_color11");
		$("#printing_size_row1").attr("row-count",row_count);
		
		console.log("same row selected");
	}else{

		console.log("not same row");
	}
	$("#"+id).remove();  
  $("#tr_"+id).remove();
}
 












 
//Impression repete row 
// $("#dtp_option_13").focusout(function(){
$(document).on('focusout','#impression_paper_side11',function() {
        // $(this).css("background-color", "#ff0000");

        var row=$(this).attr('data-row');
        console.log("row number :"+row);
        var opttion_1=$("#impression_option_"+row+"1").val();
        var opttion_2=$("#impression_option_"+row+"2").val();
         var opttion_3=$("#impression_paper_side11").val();
        console.log("option 1 :"+opttion_3);

        //var opttion_3=$("#dtp_option_"+row+"3").val();
       // var opttion_3=$("#dtp_option_13").val();
       // console.log("option 3 :"+opttion_3);

        if (opttion_3.length !=0 && opttion_2 > 0 ) {
        	


        	var next_row=parseInt(row)+1;
          $("#impression_paper_side11").attr("id","impression-newId"+next_row);
        	$("#impression_row1").attr("row-count",next_row);
        	//add next dtp fields
         
          	tmp_html='<div class="row" id="impression_row'+next_row+'" row-count="'+next_row+'"  data-row="'+next_row+'">'+
        			'<div class="form-group form-group-sm">'+
              		'	<label class="col-sm-4 col-lg-2 control-label" for="impression_option_1">'+
            		'	<span class="glyphicon glyphicon-remove-sign" style="color: #943030;    cursor: pointer;" onclick="remove_impression_row(\'impression_row'+next_row+'\')"></span> Impression </label>'+
              		'<div class="col-sm-4 col-lg-3">'+
                	'<input class="form-control" type="text" id="impression_option_'+next_row+'1" name="impression_option_1[]" placeholder="">'+
              		'</div>'+
              		'<div class="col-sm-4 col-lg-2">'+
                	'	<input class="form-control" type="number" id="impression_option_'+next_row+'2" name="impression_option_2[]" placeholder="">'+
              		'</div>'+
          			'<label class="col-sm-4 col-lg-2 control-label" style="text-align: right;" for="impression_paper_side">'+
                 	'	Paper </label>'+
              		'<div class="col-sm-4 col-lg-3">'+
                	'	<input class="form-control impression_paper_side" type="text" data-row="'+next_row+'"  id="impression_paper_side11" name="impression_paper_side[]"  data-row="1" placeholder="">'+
              		'</div>'+

            		'</div>'+
          			'</div>';
	          $("#impression_row"+row).after(tmp_html);

	          //add dtp price into estimate
            tmp_html='';
            for (var i = 0; i < 1; i++) {
                row=parseInt(row)+parseInt(i);

                add_new_tr('tr_impression_row'+row,'impression '+opttion_1,0,1);


                  tmp_html+='<tr class="odd" id="tr_impression_row'+row+'">'+
                '<td><input type="text" name="product[]" value="impression '+opttion_1+'" disabled></td>'+
                '<td><input type="number" name="rate[]" value=""></td>'+
                '<td><input type="number" name="qty[]" value="1"></td>'+
                '<td class="center"> <input type="number" name="total[]" value=""></td>'+ 
                '</tr>';
              }
	         

           // $('tbody').append(tmp_html);

        }else{
        	//console.log("field is empty");
        }


});
//add dtp option by button
function add_impression_row(){
	var row=$("#impression_row1").attr('row-count');

  var impression_paper_side11=$("#impression_paper_side11").val();


 if (impression_paper_side11.length !=0 ) {

	var next_row=parseInt(row)+1;
  $("#impression_paper_side11").attr("id","impression-newId"+next_row);
	$("#impression_row1").attr("row-count",next_row);
	//add next dtp fields
	var tmp_html='<div class="row" id="impression_row'+next_row+'" row-count="'+next_row+'"  data-row="'+next_row+'">'+
        			'<div class="form-group form-group-sm">'+
              		'	<label class="col-sm-4 col-lg-2 control-label" for="impression_option_1">'+
            		'	<span class="glyphicon glyphicon-remove-sign" style="color: #943030;    cursor: pointer;" onclick="remove_impression_row(\'impression_row'+next_row+'\')"></span> Impression </label>'+
              		'<div class="col-sm-4 col-lg-3">'+
                	'<input class="form-control" type="text" id="impression_option_'+next_row+'1" name="impression_option_1[]" placeholder="">'+
              		'</div>'+
              		'<div class="col-sm-4 col-lg-2">'+
                	'	<input class="form-control" type="text" id="impression_option_'+next_row+'2" name="impression_option_2[]" placeholder="">'+
              		'</div>'+
          			'<label class="col-sm-4 col-lg-2 control-label" style="text-align: right;" for="impression_paper_side">'+
                 	'	Paper </label>'+
              		'<div class="col-sm-4 col-lg-3">'+
                	'	<input class="form-control impression_paper_side" type="number" data-row="'+next_row+'"  id="impression_paper_side11" name="impression_paper_side[]"  data-row="1" placeholder="">'+
              		'</div>'+

            		'</div>'+
          			'</div>';
      $("#impression_row"+row).after(tmp_html);
    }else{
      console.log("fill out last field");
    }
}
function remove_impression_row(id){
	var row=$("#impression_row1").attr('row-count');
	var selected_row=$("#"+id).attr('data-row');
	if (row==selected_row) {
		var	row_count=parseInt(row)-1;
    $("#impression_row"+row_count+" .impression_paper_side").attr("id","impression_paper_side11");
		$("#impression_row1").attr("row-count",row_count);
		
		console.log("same row selected");
	}else{

		console.log("not same row");
	}
	$("#"+id).remove();
  $("#tr_"+id).remove();
}

 

    $('#binding_checkbox').change(function() {
        if(this.checked) {
            //var returnVal = confirm("Are you sure?");
            //$(this).prop("checked", returnVal);
        }
        if (this.checked) {
          console.log("binding added");
            add_new_tr("binding_row",'Binding ',0,option_3);


          tmp_html='<tr class="odd" id="binding_row">'+
                '<td><input type="text" name="product[]" value="Binding" disabled></td>'+
                '<td><input type="number" name="rate[]" value=""></td>'+
                '<td><input type="number" name="qty[]" value="1"></td>'+
                '<td class="center"> <input type="number" name="total[]" value=""></td>'+ 
                '</tr>';

          //$('tbody').append(tmp_html);
        }else{
          $('#binding_row').remove();
          console.log("binding removed");
        }
               
    });

$(document).on('focusout','#binding_option',function() {
        // $(this).css("background-color", "#ff0000");

        
        var option_3=$("#binding_option").val();
       

        

        if (option_3 > 0 ) {
          
           $("#tr_binding_option").remove();

         



          add_new_tr("tr_binding_option",'Binding ',0,option_3);

            tmp_html='<tr class="odd" id="tr_binding_option">'+
                '<td><input type="text" name="product[]" value=" Binding  " disabled></td>'+
                '<td><input type="number" name="rate[]" value=""></td>'+
                '<td><input type="number" name="qty[]" value="'+option_3+'"></td>'+
                '<td class="center"> <input type="number" name="total[]" value="" disabled></td>'+ 
                '</tr>';

          //  $('tbody').append(tmp_html);

            //add dtp price into estimate


        }else{
          $("#tr_binding_option").remove();


          //console.log("field is empty");
        }


});




    //add aditional colour field

$(document).on('focusout','#positive_option_3',function() {
        // $(this).css("background-color", "#ff0000");

        
        var option_3=$("#positive_option_3").val();
        console.log("color 1 :"+option_3);

        

        if (option_3 > 0 ) {
          


         



            add_new_tr("tr_positive_option_3",'positive ',0,option_3);

            tmp_html='<tr class="odd" id="tr_positive_option_3">'+
                '<td><input type="text" name="product[]" value=" positive " disabled></td>'+
                '<td><input type="number" name="rate[]" value=""></td>'+
                '<td><input type="number" name="qty[]" value="'+option_3+'"></td>'+
                '<td class="center"> <input type="number" name="total[]" value=""></td>'+ 
                '</tr>';

           // $('tbody').append(tmp_html);

            //add dtp price into estimate


        }else{
          //console.log("field is empty");
        }


});
//add dtp option by button
function add_positive_row(){
  var row=$("#printing_size_row1").attr('row-count');
  var next_row=parseInt(row)+1;
  var color=$("#printing_color11").val();
  if (color.length !=0 ) {
    $("#printing_color11").attr("id","newId"+next_row);
    $("#printing_size_row1").attr("row-count",next_row);
    //add next dtp fields
    var tmp_html='<div class="row" id="printing_size_row'+next_row+'" data-row="'+next_row+'" >'+
              '<div class="form-group form-group-sm">'+
              '  <label class="col-sm-4 col-lg-2 control-label" for="dtp_option_1">'+
              '     </label>'+
              ' <div class="col-sm-4 col-lg-4">'+
              '   '+
              '  </div>'+
              
              ' <label class="col-sm-4 col-lg-2 control-label" style="text-align: right;" for="printing_color">'+
                ' <span class="glyphicon glyphicon-remove-sign" onclick="remove_color_row(\'printing_size_row'+next_row+'\')" style="color: #943030;"></span>   Colour </label>'+



              '  <div class="col-sm-4 col-lg-4">'+
              '    <input class="form-control printing_color" type="text" data-row="'+next_row+'" id="printing_color11" xxid="dtp_option_'+next_row+'3" name="printing_color[]" placeholder="">'+
              '  </div>'+

              '</div>'+
            '</div>';
      $("#printing_size_row"+row).after(tmp_html);
    }else{
      $("#printing_color11").focus();
      console.log("fill out all last color field");
    }
}
function remove_positive_row(id){
  var row=$("#printing_size_row1").attr('row-count');
  var selected_row=$("#"+id).attr('data-row');
  if (row==selected_row) {
    var row_count=parseInt(row)-1;
    $("#printing_size_row"+row_count+" .printing_color").attr("id","printing_color11");
    $("#printing_size_row1").attr("row-count",row_count);
    
    console.log("same row selected");
  }else{

    console.log("not same row");
  }
  $("#"+id).remove();  
  $("#tr_"+id).remove();
}

$(document).on('focusout','#paper_qty',function() {
        // $(this).css("background-color", "#ff0000");

        
        var option_3=$("#paper_qty").val();
        var opttion_1=$("#paper").val();
        console.log("color 1 :"+option_3);

        

        if (option_3 > 0 ) {
          


         



            var row=1;
            tmp_html='';
            for (var i = 0; i < option_3; i++) {
                row=parseInt(row)+parseInt(i);

                add_new_tr("tr_paper_row"+row,'Paper :'+opttion_1+' - '+row,0,1);
                //   tmp_html+='<tr class="odd" id="tr_paper_row'+row+'">'+
                // '<td><input type="text" name="product[]" value="Paper :'+opttion_1+' - '+row+'" disabled></td>'+
                // '<td><input type="number" name="rate[]" value=""></td>'+
                // '<td><input type="number" name="qty[]" value="1"></td>'+
                // '<td class="center"> <input type="number" name="total[]" value=""></td>'+ 
                // '</tr>';
              }

           // $('tbody').append(tmp_html);

            //add dtp price into estimate


        }else{
          //console.log("field is empty");
        }


});

function add_new_tr(row_id,product,rate,qty){
    var total =parseInt(rate)*parseInt(qty);
    var tmp_html='';
   tmp_html+='<tr class="odd" id="'+row_id+'">'+
                '<td><input type="text" name="product[]" value="'+product+'"></td>'+
                '<td><input type="number" id="product_rate" class="product_rate" name="rate" value="'+rate+'"></td>'+
                '<td><input type="number" name="qty" class="product_qty" value="'+qty+'"></td>'+
                '<td class="center"> <input type="number" class="product_total" name="total[]" value="'+total+'"></td>'+ 
                '</tr>';

    tmp_html="<tr class='odd' id='"+row_id+"'>"+
                "<td><input type='text' name='product[]' value='"+product+"'></td>"+
                "<td><input type='number' id='product_rate' class='product_rate' name='rate[]' value='"+rate+"'></td>"+
                "<td><input type='number' name='qty[]' class='product_qty' value='"+qty+"'></td>"+
                "<td class='center'> <input type='number' class='product_total' name='item_total[]' value='"+total+"'></td>"+ 
                "</tr>";
     $('tbody').append(tmp_html);
}

$(document).on('focusout','.product_rate',function() {
 
  var parent=$(this).parent().parent().attr('id');
  calculate_product_price(parent);
});
$(document).on('focusout','.product_qty',function() {
 
  var parent=$(this).parent().parent().attr('id');
  calculate_product_price(parent);
});


function calculate_product_price(parent){
  var rate=$("#"+parent+" .product_rate").val();
  var qty=$("#"+parent+" .product_qty").val();
  var total =qty*rate;
  $("#"+parent+" .product_total").val(total);
  console.log(" parent id is :"+parent);
   console.log(" calculate total:");
  calculate_total();
}

$(document).on('focusout','#round_off',function() {
 
   
  calculate_total();
});

$(document).on('focusout','#additional_charge',function() {
 
   
  calculate_total();
}); 
$(document).on('focusout','#gst_rate',function() {
 
   
  calculate_total();
});

function calculate_total(){
  var rows = $("#bill_table").children('tbody').children('tr');
  var total=0;
  var tr_id='';
   rows.each(function(){
      tr_id=$(this).attr('id');
      total= parseInt(total)+parseInt($("#"+tr_id+" .product_total").val());
      
      //  total = $(this +" .product_total").val();
    });
   $("#sub_total").val(total);


   var round_off=$("#round_off").val();
   var additional_charge=$("#additional_charge").val();
   //var total=0;
   total=parseInt(total)-parseInt(round_off)+parseInt(additional_charge);
   $("#total").val(total);

   var gst_rate=$("#gst_rate").val();

   var gst= (total/100)*gst_rate;
   $("#gst").val(gst);
   //console.log("gst price "+gst);

   var grand_total=parseInt(total)+parseInt(gst);
   $("#grand_total").val(grand_total);
   var payment=0;
   var balance=0;
   
  //console.log("total : "+total);




}

