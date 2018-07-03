<div class="jumbotron" style="background-color: #888888; text-align: center; padding: 1%; margin-top: 2%;">
  <h3>Post/Create a BLOG</h3>
</div>

<form action="<?php echo base_url().'blog/create' ?>", method="post">
  <?php echo validation_errors(); ?>
  <div class="row">
     <div class="col s12">
       <div class="row">
         <div class="input-field col s12">
           <i class="material-icons prefix">title</i>
           <input type="text" id="autocomplete-input" class="autocomplete" name="title">
           <label for="autocomplete-input">Title</label>
         </div>
       </div>
     </div>
   </div>
   <div class="row">
      <div class="input-field col s12">
        <i class="material-icons prefix">mail</i>
        <textarea id="textarea2" class="materialize-textarea" name="body"></textarea>
        <label for="textarea2">Body</label>
      </div>
  </div>
  <input class="btn btn-primary-lg" type="submit" value="CREATE">
</form>
