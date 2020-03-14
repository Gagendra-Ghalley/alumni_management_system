  <?php if($message4->completeStatus=='Y'){?>
                                                        <div class="blue center">

                                                          <?php }
                                                          echo "completed.</div>";

                                                          else {
                                                            echo "not completed.</div>";
                                                          }


                                                        elseif($message4->forwardStatus=='Y'){?>
                                                        <div class="blue center">
                                                          <?php} 

                                                          echo "forwarded.</div>";

                                                          else{
                                                            echo "not forwarded.</div>";
                                                          }




                        <?php if($f3==2){?> <td style="background-color:#F00;"><font face="Arial, Helvetica, sans-serif"><?php echo $f3; ?></font></td> <? }else { ?> <td><font face="Arial, Helvetica, sans-serif"><?php echo $f3; ?></font></td> <?php } ?> Try this code with last cell
