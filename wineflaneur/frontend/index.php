<?PHP 
$pageTitle = "Design";
require_once('../inc/config.php');
include(ROOT_PATH . 'inc/header.php'); ?>

<!-- Button to trigger modal -->
<a href="#myModal" role="button" class="btn" data-toggle="modal">Launch a sample Modal</a>
 
<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Sample</h3>
  </div>
  <div class="modal-body">
    <p>The Design page of the site is last on my list of things to do.</p>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
  </div>
</div>

  <div>
    <a href="<?php echo BASE_URL; ?>frontend/list/" class="btn btn-large btn-primary" type="button">Sample App List</a>
  </div>

<? include(ROOT_PATH . 'inc/footer.php'); ?>