                                     <ol class='breadcrumb'>
                                    <?php foreach($data['breadcrumbs'] as $rw) {?>
                                     <li><a href='<?php echo $rw['link'];?>'><?php echo $rw['title']; ?></a></li>
                                    <?php } ?>
                                    </ol>       