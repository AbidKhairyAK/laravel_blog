<div id="comments" class="panel panel-default">
  <div class="panel-body">
    <h3 class="text-center"><i class="fa fa-comments"></i> 4 Comments</h3>

    <!-- Comment list -->
    <div class="panel panel-default">
      <div class="panel-body">
        <h4>John Doe <small>January 14, 2016</small></h4>
        <hr>
        <div>
          <p>
            Donec tempor, diam vel faucibus tempor, ex leo vulputate dui, nec molestie nisi nulla id libero. Vestibulum sollicitudin est at tristique tincidunt. Integer a accumsan tortor. Sed mollis euismod varius. Vestibulum magna sem, blandit ac luctus id, luctus non justo.
          </p>
          <p>
            Sed sit amet lorem hendrerit, rhoncus felis at, tincidunt tellus. Donec dignissim vitae nibh posuere venenatis. Vivamus tristique mattis pellentesque. Nullam at lorem venenatis, finibus magna in, gravida metus.
          </p>
        </div>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-body">
        <h4>John Doe <small>January 14, 2016</small></h4>
        <hr>
        <div>
          <p>
            Donec tempor, diam vel faucibus tempor, ex leo vulputate dui, nec molestie nisi nulla id libero. Vestibulum sollicitudin est at tristique tincidunt. Integer a accumsan tortor. Sed mollis euismod varius. Vestibulum magna sem, blandit ac luctus id, luctus non justo.
          </p>
          <p>
            Sed sit amet lorem hendrerit, rhoncus felis at, tincidunt tellus. Donec dignissim vitae nibh posuere venenatis. Vivamus tristique mattis pellentesque. Nullam at lorem venenatis, finibus magna in, gravida metus.
          </p>
        </div>

        <!-- Nested -->
        <div class="panel panel-default nested-1">
          <div class="panel-body">
            <h4>John Doe <small>January 14, 2016</small></h4>
            <hr>
            <div>
              <p>
                Donec tempor, diam vel faucibus tempor, ex leo vulputate dui, nec molestie nisi nulla id libero. Vestibulum sollicitudin est at tristique tincidunt. Integer a accumsan tortor. Sed mollis euismod varius. Vestibulum magna sem, blandit ac luctus id, luctus non justo.
              </p>
              <p>
                Sed sit amet lorem hendrerit, rhoncus felis at, tincidunt tellus. Donec dignissim vitae nibh posuere venenatis. Vivamus tristique mattis pellentesque. Nullam at lorem venenatis, finibus magna in, gravida metus.
              </p>
            </div>
          </div>
        </div>

        <div class="panel panel-default nested-1">
          <div class="panel-body">
            <h4>John Doe <small>January 14, 2016</small></h4>
            <hr>
            <div>
              <p>
                Donec tempor, diam vel faucibus tempor, ex leo vulputate dui, nec molestie nisi nulla id libero. Vestibulum sollicitudin est at tristique tincidunt. Integer a accumsan tortor. Sed mollis euismod varius. Vestibulum magna sem, blandit ac luctus id, luctus non justo.
              </p>
              <p>
                Sed sit amet lorem hendrerit, rhoncus felis at, tincidunt tellus. Donec dignissim vitae nibh posuere venenatis. Vivamus tristique mattis pellentesque. Nullam at lorem venenatis, finibus magna in, gravida metus.
              </p>
            </div>

            <!-- Nested on Nested -->
            <div class="panel panel-default nested-2">
              <div class="panel-body">
                <h4>John Doe <small>January 14, 2016</small></h4>
                <hr>
                <div>
                  <p>
                    Donec tempor, diam vel faucibus tempor, ex leo vulputate dui, nec molestie nisi nulla id libero. Vestibulum sollicitudin est at tristique tincidunt. Integer a accumsan tortor. Sed mollis euismod varius. Vestibulum magna sem, blandit ac luctus id, luctus non justo.
                  </p>
                  <p>
                    Sed sit amet lorem hendrerit, rhoncus felis at, tincidunt tellus. Donec dignissim vitae nibh posuere venenatis. Vivamus tristique mattis pellentesque. Nullam at lorem venenatis, finibus magna in, gravida metus.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div><!-- Comment Panel Body Closer -->

  <hr class="row">

  <!-- Post Comment -->
  <div class="panel-body">
    <h3 class="text-center">Leave a comment</h3>
    <form action="/action_page.php">
        <div class="form-group">
          <label for="name">Name <small class="text-danger">*</small></label>
          <input type="name" class="form-control" id="name" placeholder="Enter Your Name" name="name">
        </div>
        <div class="form-group">
          <label for="email">Email <small class="text-danger">*</small></label>
          <input type="email" class="form-control" id="email" placeholder="Enter Your Email" name="email">
        </div>
        <div class="form-group">
          <label for="web">Website</label>
          <input type="text" class="form-control" id="web" placeholder="Enter Your Web" name="web">
        </div>
        <div class="form-group">
          <label for="comment">Comment <small class="text-danger">*</small></label>
          <textarea type="text" class="form-control" rows="5" id="comment" placeholder="Enter Your Comment" name="comment"></textarea>
        </div>
        <button type="submit" class="btn btn-lg btn-success">Submit</button>
        <i class="text-muted pull-right"><small class="text-danger">*</small> Indicates required fields</i>
      </form>
  </div><!-- Post Comment Closer -->

</div><!-- Comment Closer -->
