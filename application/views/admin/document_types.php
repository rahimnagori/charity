<?php include 'include/header.php'; ?>

<div class="conten_web">
  <h4 class="heading">Document Types</h4>
  <h4 class="text-right"><button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#addDocumentModal">Add Document</button></h4>
  <div class="white_box">
    <div class="card_bodym">
      <div class="table-responsive">
        <table id="extent_tbl1" class="table display">
          <thead>
            <tr>
              <th>S.No.</th>
              <th>Document Name</th>
              <th>Mandatory</th>
              <th>Created By</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
              foreach($documentTypes as $serialNumber => $documentType){
                $mandatoryStatus = ($documentType['is_mandatory'] == 1) ? 'Mandatory' : 'Not mandatory';
            ?>
                <tr>
                  <td><?=$serialNumber + 1;?></td>
                  <td><?=$documentType['document_name'];?></td>
                  <td><?=$mandatoryStatus;?></td>
                  <td><?=$documentType['created_by'];?></td>
                  <td>
                    <a href="#" class="btn btn-info btn-sm">Edit</a>
                    <a href="#" class="btn btn-danger btn-sm">Delete</a>
                  </td>
                </tr>
            <?php
              }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div id="addDocumentModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<?php include 'include/footer.php'; ?>