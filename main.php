<div class="row">
    <?php
    $sql = "SELECT * From guestbook ";
    if (!empty($_GET['search'])) {
        $s = $_GET['search'];
        $sql .= "WHERE title LIKE '%$s%' OR name LIKE '%$s%'";
    }
    $list = getRows($sql);
    foreach ($list as $d) {
        ?>
        <div class="col-sm-6 ">
            <div class="thumbnail">
                <div class="caption">
                    <h3><?= $d->title ?></h3>
                    <hr style="margin:.5em 0"/>
                    <div class="content"><?= $d->content ?></div>
                    <div class="author text-right">
                        By <?= $d->name ?> @
                        <time><?= date('Y-m-d H:i:s', $d->time) ?></time>
                    </div>
                    <?php
                    if (@$_SESSION['login']) {
                        ?>
                        <div class="text-right">
                            <a href="./?page=delete&id=<?= $d->id ?>"
                               class="btn btn-sm btn-danger"
                               onclick="return confirm('Are you sure?')"
                            >DELETE THIS POST</a>
                        </div>

                        <?
                    }
                    ?>
                </div>
            </div>
        </div>
        <?php
    }
    ?>

</div>
<hr/>
<div class="row">
    <div class="col-xs-12">
        <h3>Post a new meesage</h3>
        <form action="./" method="POST" class="form-inline">
            <input hidden name="action" value="Post"/>
            <fieldset class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" required name="name" placeholder="Enter your name" class="form-control"/>
            </fieldset>
            &nbsp;
            <fieldset class="form-group">
                <label for="name">Title:</label>
                <input type="text" id="title" required name="title" placeholder="A title for this message"
                       class="form-control"/>
            </fieldset>
            <p></p>
            <fieldset class="form-group" style="display:block">
                <label for="content" style="display:block">
                    Content
                </label>
                <textarea id="content" name="content"
                          class="form-control" required
                          style="display:block;width:100%" rows="6"
                          placeholder="Please type something..."
                ></textarea>
            </fieldset>
            <p></p>
            <fieldset class="form-group text-right" style="display:block">
                <button class="btn btn-primary">Submit</button>
            </fieldset>
        </form>
    </div>
</div>