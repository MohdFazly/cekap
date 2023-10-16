<!-- Edit Lorry -->
<div class="modal fade" id="editlorry<?php echo $row['LorryNumber']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Edit Lorry</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="edit_lorry.php?lorry=<?php echo $row['LorryNumber']; ?>" enctype="multipart/form-data">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Lorry Number:</label>
            <input type="text" value="<?php echo $row['LorryNumber']; ?>" name="numberlorry" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
                            <div class="col-md-3" style="margin-top:7px;">
                                <label class="control-label">Status:</label>
                            </div>
            
                    <select id="status" class="form-control" name="status">
                    <option value="Available">Available</option>
                    <option value="Unavailable">Unavailable</option>
                    </select>
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

<!-- Delete Lorry -->
<div class="modal fade" id="deletelorry<?php echo $row['LorryNumber']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Delete Lorry</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h3 class="text-center"><?php echo $row['LorryNumber']; ?></h3>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <a href="delete_lorry.php?lorry=<?php echo $row['LorryNumber']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
            </form>
      </div>
    </div>
  </div>
</div>