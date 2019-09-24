<?php $this->layout('layout', ['title' => 'Users']) ?>
<div class="row">
    <?php foreach ($users as $user) : ?>
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <div class="card" style="margin-bottom: 20px">
                <div class="card-body">
                    <h5 class="card-title"><?= $user['name'] ?></h5>
                    <p class="card-text">
                        <?= $user['email'] ?>
                    </p>
                    <small class="text-muted">
                        <?php echo date("d/m/Y", strtotime($user['created_at'])) ?>
                    </small>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
