<!-- Modal -->
<div class="modal fade" id="moreAbout-<?= $v->id; ?>" tabindex="-1" role="dialog" aria-labelledby="moreAboutLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="moreAboutLabel"><?= $v->title; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php $info = getAPI(GAME_PATH, "id", $v->id); ?>
          <div class="info-wrap">
              <p class="desc"><?= $info->description; ?></p>
              <p class="<?= $info->status; ?>"><?= $info->status; ?></p>
              <div class="requirements">
                <ul>
                  <?php if(!empty($info->minimum_system_requirements)) : ?>
                    <?php foreach($info->minimum_system_requirements as $k_req => $v_req) : ?>
                      <li><?= $k_req . " - " . $v_req; ?></li>
                    <?php endforeach; ?>
                  <?php endif; ?>
                </ul>
              </div>
              <div class="gallery-game center-me">

                    <?php foreach($info->screenshots as $game_img) : ?>
                        <div class="img-wrap">
                            <img src="<?= $game_img->image; ?>">
                        </div>
                    <?php endforeach; ?>

              </div>
          </div>
      </div>
    </div>
  </div>
</div>