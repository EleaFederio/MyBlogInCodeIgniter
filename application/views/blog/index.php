<div class="jumbotron" style="background-color: #888888; text-align: center; padding: 1%; margin-top: 2%;">
  <h3>Welcome to this BLOG</h3>
  <a class="btn-floating btn-large waves-effect waves-light teal" style="position: absolute; right: 20%; top: 12%;" href="<?php echo base_url().'blog/create'; ?>">+</a>
</div>
<?php foreach ($fetched_notes as $key => $value) :?>
    <div class="alert alert-primary" role="alert" style="color: black">
        <h5><?php echo $value['title'] ?></h5>
        <small><?php echo $value['createDate'] ?></small>
        <h6><?php echo $value['body'] ?></h6>
        <hr>
        <a class="waves-effect waves-light light-blue darken-1 btn" href="<?php echo base_url()?>blog/<?php echo $value['mynotes_id'] ?>">Read More...</a>
    </div>
<?php endforeach; ?>
