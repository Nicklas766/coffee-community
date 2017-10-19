<div class="container">
    <div class="text-container" style="width:100%;">
    <?php if ($this->regionHasContent("question")) : ?>
        <?php $this->renderRegion("question") ?>
    <?php endif; ?>

    <?php if ($this->regionHasContent("answer")) : ?>
        <?php $this->renderRegion("answer") ?>
    <?php endif; ?>

    <?php if ($this->regionHasContent("form")) : ?>
        <?php $this->renderRegion("form") ?>
    <?php endif; ?>
</div>
</div>
