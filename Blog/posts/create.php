<h2><?= $title; ?></h2>

<?php echo validation_errors(); ?>
<?php echo form_open('posts/create'); ?>
  <div class="form-group">
    <label>Title</label>
    <input type="text" class="form-control" name="title"  placeholder="Add Title">
  </div>
  <div class="form-group">
    <label>Body</label>
   <textarea id="editor1" class="form-control" name="body" placeholder="Add Body"></textarea>
  </div>
  <div class="form-group">
  <label>Catagory</label>
  <select name="catagory_id" class="form-control">
  	<?php foreach($catagories as $catagory): ?>
  		<option value="<?php echo $catagory['id']; ?>"><?php echo $catagory['name']; ?></option>
  	<?php endforeach; ?>	
	
  	
  </select>	
  	


  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>