<?php get_header(); ?>
<div class="container">
  <div class="row">

    <div id="profile" class="col-md-12">
      <a href="https://www.facebook.com/remynguyen1996" target="_blank">Welcome back with webpack for wordpress by Remy Nguyen</a>
    </div>

    <div class="col-md-12 text-center">
        <a href="#" class="btn btn-primary btn-lg" id="modal">
            <span class="glyphicon glyphicon-star" aria-hidden="true"></span> Star Modal bootstrap
        </a>
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
              </div>
              <div class="modal-body">
                <?php echo "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."; ?>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
