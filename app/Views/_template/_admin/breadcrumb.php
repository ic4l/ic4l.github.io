<?php $uri = service('uri'); ?>
<ol class="breadcrumb page-breadcrumb">
    <li class="breadcrumb-item"><a href="javascript:void(0);">Mi Casa</a></li>
    <li class="breadcrumb-item"><?= $uri->getSegment(1) ?></li>
    <?php if ($uri->getSegment(2)): ?>
      <li class="breadcrumb-item"><?= $uri->getSegment(2) ?></li>
    <?php endif; ?>
    <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
</ol>
