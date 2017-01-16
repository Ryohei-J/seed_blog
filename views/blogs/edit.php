<div class="row">
  <div class="col-md-4 content-margin-top">
    <div class="msg">
      <form method="post" action="/seed_blog/blogs/update/<?php echo $viewOptinons['id']; ?>" class="form-horizontal" role="form">
        <div class="form-group">
          <label for="name" class="col-md-3 control-label">タイトル</label>
          <div class="col-md-9">
            <input type="text" class="form-control" name="title" value="<?php echo $viewOptinons['title']; ?>"></input>
          </div>
        </div>
        <div class="form-group">
          <label for="name" class="col-md-3 control-label">本文</label>
          <div class="col-md-9">
            <textarea name="body" class="form-control" cols="30" rows="5"><?php echo $viewOptinons['body']; ?></textarea>
          </div>
        </div>
        <div class="form-group pull-right">
          <p>
            <a href="/seed_blog/blogs/index" class="btn btn-default">戻る</a>&nbsp;&nbsp;
            <input type="submit" class="btn btn-danger" value="更新する" />
          </p>
        </div>
      </form>
    </div>
  </div>
</div>