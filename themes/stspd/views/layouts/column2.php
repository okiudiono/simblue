<?php $this->beginContent('//layouts/main'); ?>
<style>

.list-group li {
	float: left;
    width: 20%;
	border-radius:5px;
}
.aku {
	 width:97.5%
}

@media only screen and (max-width: 480px) {
	.list-group li {
		float: left;
		width: 100%;
		border-radius:5px;
		clear:both;
	}
	.aku {
		 width:92.5%
	}
}
</style>
    	
        <div class="col-xs-12 col-sm-12 sidebar-offcanvas bs-component" id="sidebar" >
          <div class="bs-component aku" style="position:absolute; margin-top:40px;">
            <?php
                $this->widget('zii.widgets.CMenu', array(
                    'encodeLabel' => false,
                    'items'=>$this->menu,
                    'htmlOptions'=>array('class'=>'list-group'),
                ));
            ?>
          </div>
        </div>
	  <?php echo $content; ?>
<?php $this->endContent(); ?>