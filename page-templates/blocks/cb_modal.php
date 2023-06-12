<?php
$id = random_str(8);
?>
<div class="py-4 text-center"><button type="button" data-bs-toggle="modal" data-bs-target="#modal_<?=$id?>" class="btn--no-arrow btn btn--blue"><i class="fas fa-info-circle"></i> <?=get_field('button_title')?></button></div>

<div class="modal fade" id="modal_<?=$id?>" tabindex="-1" role="dialog" aria-labelledby="modal_<?=$id?>" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <div class="h5 modal-title" id="ModalLabel"><?=get_field('modal_title')?></div>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?=get_field('modal_content')?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn--no-arrow btn btn--blue" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>