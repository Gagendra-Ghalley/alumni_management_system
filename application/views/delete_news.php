
        <!--  page-wrapper -->
        <div id="page-wrapper">
          <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h2 class="text-left" style="text-shadow: 1px 1px 2px "></h2> <div class="clockwrapper" style="color: #111"><div id="clock"></div>, <?php echo date('D d/M/Y');?></div>
                </div>
                <!--End Page Header -->
            </div>
             <div class="row">
                <!-- Welcome -->
                <div class="col-lg-12"><?php if(strtotime($this->session->userdata('atd_time'))>strtotime('')) {echo "<div class='alert alert-success'>";}else {echo "<div class='alert alert-success'>";}?>
                    
                     

 
                    </div>
                </div>
            

        


            <div id="page-wrapper" style="margin-left: 0px">
     
             
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> <span>Add News</span>
                            <div class="pull-right">
                               
                            </div>
                        </div>
                      
                        <div class="container">
                          <div class="row">
                        <div class="col-lg-10 col-md-10 col-sm-12 "  >
                        
                          <table style="height:100%; width: 100%; text-align: justify;font-family:georgia; color:black; font-size: 15px;border: 1px">
                              <tr style="background:#CCC">
                                <th>slno</th>
                                <th style="text-align: center;">Description</th>
                                <th>Status</th>
                              </tr>
                    
                                    
                                      <?php
                                        $i=1;
                                        foreach($data as $row)
                                        {
                                        echo "<tr>";
                                        echo "<td>".$i."</td>";
                                        echo "<td>".$row->describtion."</td>";

                                        echo "<td><a href='deletedata?id=".$row->id."'> <button style=background-color:#f54269;color:#fff;align:left;>Delete</button></a></td>"; 

                                      
                                        
                                        echo "</tr>";
                                        $i++;
                                        }
                                         ?><br>


                		              </div> 
                                  </table>

              		</div>
                  </div>
                  
                           
                        
    <script type="text/javascript">
    $(".remove").click(function(){
        var id = $(this).parents("tr").attr("id");


        if(confirm('Are you sure to remove this record ?'))
        {
            $.ajax({
               url: '/delete_news/'+id,
               type: 'DELETE',
               error: function() {
                  alert('Something is wrong');
               },
               success: function(data) {
                    $("#"+id).remove();
                    alert("Record removed successfully");  
               }
            });
        }
    });


</script>