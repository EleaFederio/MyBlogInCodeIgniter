<h1 style="margin-top: 3%"><b><?php echo $post['title'] ?></b></h1>
<small><?php echo $post['createDate']?></small>
<h3><?php echo $post['body'] ?></h3>
<a class="btn btn-primary" href="<?php echo base_url()?>blog/edit/<?php echo $post['mynotes_id'] ?>">EDIT</a>
<a class="btn btn-danger" href="<?php echo base_url()?>blog/delete/<?php echo $post['mynotes_id'] ?>">DELETE</a>
