<?php //var_dump($viewOptinons); ?>
<div class="row">
      <div class="col-md-4 content-margin-top">
      <p><a href="/seed_blog/blogs/add" class="btn btn-info">新規投稿</a></p>
      	<?php foreach ($viewOptinons as $viewOptinon) { ?>
	        <div class="msg">
	          <p><a href="/seed_blog/blogs/show/<?php echo $viewOptinon['id']; ?>"><?php echo $viewOptinon['title']; ?></a></p>
	          <p class="day">
	              <?php echo $viewOptinon['created']; ?>
	            [<a href="/seed_blog/blogs/edit/<?php echo $viewOptinon['id']; ?>" style="color: #00994C;">編集</a>]
	            [<a href="/seed_blog/blogs/delete/<?php echo $viewOptinon['id']; ?>" style="color: #F33;">削除</a>]
	          </p>
	        </div>
        <?php } ?>
      </div>
</div>