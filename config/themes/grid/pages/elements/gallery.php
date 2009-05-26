<?php 
$files   = $this->filebrowser->get_file_list("img");
if (sizeof($files) > 0) { 
  $this->filebrowser->set_displayed_content(true);
?>
<div id="gallery" >
  <ul>
  <?php foreach ($files as $file) { 
    if ($file->needs_thumbnail()) { 
      $thumbnail = $file->get_thumbnail_url();
      if ($thumbnail <> '') {
			// File With Thumbnail --------------
      ?>
      <li>
        <a href="<?php echo $this->filebrowser->get_link($file->name); ?>">
					<div class="gallery_thumbnail">
						<div class="vcenterer">
							<img src="<?php echo $thumbnail ?>" />
						</div>
					</div>
        	<p><?php echo $file->name ?></p>
				</a>
      </li>
      <?php } ?>
    <? } else { 
		// File Without Thumbnail --------------
			?>
      <li>
        <a href="<?php echo $this->filebrowser->get_link($file->name); ?>">
					<div class="gallery_thumbnail">
						<div class='hcenterer'>
							<div class="vcenterer">
								<img src="<?php echo $file->get_url() ?>" />
							</div>
						</div>
					</div>
        	<p><?php echo $file->name ?></p>
				</a>
      </li>
    <?php } ?>
    <?php } ?>
  
  </ul>

</div>
<?php } ?>