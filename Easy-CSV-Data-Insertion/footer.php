 <!-- File Upload option -->
          <div id="fileupload" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h3 id="myModalLabel">Upload Data via CSV File</h3>
            </div>
            <div class="modal-body">
<form class="form-horizontal" enctype="multipart/form-data" method="post" action="Uploadmypdo.php">
            <div class="control-group">
              <label class="control-label" for="inputName">Save CSV File</label>
              <div class="controls">
              <input type="hidden" name="MAX_FILE_SIZE" value="9999999" />
              <input class="btn btn-info" name="file" type="file" id="file" onchange="showCode()" onblur="showCode()" onclick="showCode" required="required"  />
              </div>
            </div>
            <div class="control-group">
              <div class="controls">
                <button type="submit" class="btn">Save CSV</button>
              </div>
            </div>
          </form>

            </div>
          </div> 