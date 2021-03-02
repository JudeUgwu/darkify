<?php if(!empty($comments)){ ?>
<div id="comments" class="comments-area">
  <div class="comments-main-content">
    <div class="row">
      <div class="col-md-12">
        <h3 class="comments-title"><?=count($comments)?> Comments</h3>
        <!--/.comments-title-->
      </div>
      <!--/.col-md-12-->
    </div>
    <!--/.row-->

    <div class="row">
      <div class="col-md-12">
        <ol class="comment-list">
        <?php foreach ($comments as $key => $comment) {
          $user = (object) selectSingleData("users","*","`id`={$comment->user_id}");
        ?>


          <li class="comment">
            <div class="comment-body">
              <div class="comment-meta">
                <div class="comment-author vcard">
                  <div class="author-img">
                    <img alt="Maria" src="<?=$user->image?>" class="avatar photo">
                  </div>
                </div>
                <!--/.comment-author-->
                <div class="comment-metadata"><b class="author"><?=ucwords($user->firstname)?> <?=ucwords($user->lastname)?></b>
                </div>
                <!--/.comment-metadata-->
              </div>
              <!--/.comment-meta-->
              <div class="comment-details">
                <div class="comment-content">
                  <p><?=ucwords($comment->comment)?></p>
                </div>
                <!--/.comment-content-->
                <div class="comment-footer">
                  <span class="date"><?=date("d M,Y",strtotime($comment->created_at))?></span>
                  <!-- <a href="#" class="comment-reply-link">Reply</a> -->
                </div>
              </div><!-- /.comment-details-->
            </div>
            <!--/.comment-body-->
            <!-- reply goes here -->


            <!-- reply ends -->

            <!--/.children-->
          </li>

        <?php     } ?>
        </ol>
        <!--/.comment-list-->
      </div>
      <!--/.col-md-12-->
    </div>
    <!--/.row-->
  </div><!-- /.comments-main-content -->
</div><!-- /.comments-area -->

<?php } ?>


<?php if(!empty($_SESSION['customer_id'])){ ?>
<div class="comment-respond">
  <form method="POST" action="<?=APP_PATH?>controllers/processor.php" class="comment-form">
    <h3 class="comment-reply-title">Leave your comment</h3>
    <div class="row">
        
      <div class="col-12">
        <textarea class="form-control" name="comment" rows="4" cols="50" placeholder="Your message here"></textarea>
        <span class="text-danger error"></span>

      </div><!-- /.col-12 -->
      <input type="hidden" name="post_id" value="<?=sanitize($_GET['id'])?>">
      <div class="form-submit clearfix">
        <button type="submit" name="button" value="comment" class="btn btn-default">Post <i class="fas fa-arrow-right"></i></button>
      </div><!-- /.subimt -->
    </div><!-- /.row -->
  </form>
</div>

<?php } ?>



















