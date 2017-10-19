





<?php if ($this->regionHasContent("home")) : ?>
    <?php $this->renderRegion("home") ?>
<?php endif; ?>

<?php if ($this->regionHasContent("service-banner")) : ?>
    <?php $this->renderRegion("service-banner") ?>
<?php endif; ?>

<?php if ($this->regionHasContent("question")) : ?>
    <?php $this->renderRegion("question") ?>
<?php endif; ?>

<?php if ($this->regionHasContent("signup")) : ?>
    <?php $this->renderRegion("signup") ?>
<?php endif; ?>
