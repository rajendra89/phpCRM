<?php include_once('header.php'); ?>
<div class="wrapper">
  <div class="container">
    <div class="row">      
      <div class="span3">
       <?php include_once('sidebar_vertical.php'); ?>
     </div>
     <!-- form -->
     <div class="span9">
  <div class="content">

    <div class="module">
      <div class="module-head">
        <h3>Please Fill the form with Customer Details</h3>
      </div>
      <div class="module-body">

        <div class="alert">
          <button type="button" class="close" data-dismiss="alert">×</button>
          <strong>Warning!</strong> Something fishy here!
        </div>
        <div class="alert alert-error">
          <button type="button" class="close" data-dismiss="alert">×</button>
          <strong>Oh snap!</strong> Whats wrong with you? 
        </div>
        <div class="alert alert-success">
          <button type="button" class="close" data-dismiss="alert">×</button>
          <strong>Well done!</strong> Now you are listening me :) 
        </div>

        <br />

        <form class="form-horizontal row-fluid">
          <div class="control-group">
            <label class="control-label" for="basicinput">Customer Name</label>
            <div class="controls">
              <input type="text" id="basicinput" placeholder="Type something here..." class="span8">
            </div>
          </div>

          <div class="control-group">
            <label class="control-label" for="basicinput">Email address</label>
            <div class="controls">
              <input type="text" id="basicinput" placeholder="Type something here..." class="span8">
            </div>
          </div>

          <div class="control-group">
            <label class="control-label" for="basicinput">Address</label>
            <div class="controls">
              <input type="text" id="basicinput" placeholder="Type something here..." class="span8">
            </div>
          </div>

          <div class="control-group">
            <label class="control-label" for="basicinput">Group Selector</label>
            <div class="controls">
              <div class="dropdown">
                <a class="dropdown-toggle btn" data-toggle="dropdown" href="#">Dropdown Button <i class="icon-caret-down"></i></a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                  <li><a href="#">Whole Seller</a></li>
                  <li><a href="#">Bulk Buy</a></li>
                  <li><a href="#">Retailer</a></li>
                  <li><a href="#">Fourth Row</a></li>
                </ul>
              </div>
            </div>
          </div>

          <div class="control-group">
            <label class="control-label">Inline Radiobuttons</label>
            <div class="controls">
              <label class="radio inline">
                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                Option one
              </label> 
              <label class="radio inline">
                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                Option two
              </label> 
              <label class="radio inline">
                <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
                Option three
              </label>
            </div>
          </div>

          <div class="control-group">
            <label class="control-label">Inline Checkboxes</label>
            <div class="controls">
              <label class="checkbox inline">
                <input type="checkbox" value="">
                Option one
              </label>
              <label class="checkbox inline">
                <input type="checkbox" value="">
                Option two
              </label>
              <label class="checkbox inline">
                <input type="checkbox" value="">
                Option three
              </label>
            </div>
          </div>

          <div class="control-group">
            <label class="control-label" for="basicinput">Textarea</label>
            <div class="controls">
              <textarea class="span8" rows="5"></textarea>
            </div>
          </div>

          <div class="control-group">
            <div class="controls">
              <button type="submit" class="btn">Submit Form</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div><!--/.content-->
</div><!--/.span9-->
    
  </div>
</div> <!-- container -->
</div> <!-- wrapper -->

<?php include_once('footer.php'); ?>