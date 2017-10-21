<script>

function ajaxPost(url, data) {
    $.ajax({
            type: "POST",
            url: url,
            data: data,
            success: function(data){
                console.log(data);
                $.ajax({
                        type: "GET",
                        url: currentUrl,
                        success: function(content) {
                        $("body").html(content);
                    }
                });
            }
        });
    }
</script>



<div>
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
