 <input type="button" value="forwardmessage" class="btn btn-primary"  <?php if ($message2->CompleteStatus='Y'){ ?> disabled <?php   } ?>  onclick="forwardmessage()" /> 
                                      <input type="button" value="forward message" class="btn btn-primary" <?php if($message2->CompleteStatus='Y')
                                      { echo  'disabled=disabled' ; }  else { echo 'onclick="forwardmessage()"';} ?>  />



// disabling button//

                                    


                                      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
  <?php 
  if(file_exists('uploads/'.$results->id.'_.jpg')){ 
    echo 'Enabled'; 
  }else{ 
    echo 'Disabled'; 
  } 
  ?>
  </button>


  <?php 
    $status = "";
    if(!file_exists( 'uploads/' . $results->id . '_.jpg' )){ 
        $status = "disabled";
?>

<button 
    type="button" 
    class="btn btn-default dropdown-toggle" 
    data-toggle="dropdown"
    <?php echo $status; ?>
    >
  