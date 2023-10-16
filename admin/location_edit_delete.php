<!-- Edit Location -->
<div class="modal fade" id="editlocation<?php echo $row['LocationID']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Edit Location</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="edit_location.php?location=<?php echo $row['LocationID']; ?>" enctype="multipart/form-data">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Location Name:</label>
            <input type="text" value="<?php echo $row['LocationName']; ?>" name="lname" class="form-control" id="recipient-name">
          </div>

        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary">Save Update</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Delete Location -->
<div class="modal fade" id="deletelocation<?php echo $row['LocationID']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Delete Location</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h3 class="text-center"><?php echo $row['LocationName']; ?></h3>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <a href="delete_location.php?location=<?php echo $row['LocationID']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
            </form>
      </div>
    </div>
  </div>
</div>