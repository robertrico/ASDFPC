<?php echo $this->Html->script('viewj'); ?>
	

<div class="col-md-6">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title" style="font-size:150%">
				<?php echo h($vehicle['Vehicle']['make'].' '.$vehicle['Vehicle']['model']); ?>
			</h3>
		</div><center>
		<dl>
		<dt><?php echo __('Year'); ?></dt>
		<dd>
			<?php echo h($vehicle['Vehicle']['year']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($vehicle['Vehicle']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Current Bid'); ?></dt>
		<dd>
			$<?php echo h($vehicle['Vehicle']['current_bid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('High Bidder'); ?></dt>
		<dd>
			<?php echo h($vehicle['Vehicle']['high_bidder']); ?>
			&nbsp;
		</dd>
		
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($vehicle['Vehicle']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Expires'); ?></dt>
		<dd>
			<?php echo $date = date("Y-m-d H:i:s", time() + (14*86400)); ?>
			<?php //echo h($vehicle['Vehicle']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sold For'); ?></dt>
		<dd>
			<?php echo h($vehicle['Vehicle']['sold_for']); ?>
			&nbsp;
		</dd>
	</dl></br>
<?php $this->Logged->bidcheck($this->Session->read('Auth'),$vehicle); ?>
</center></br>
</div></div>
<div class="col-md-6">

		<div class="panel panel-default">
		<?php echo $this->Html->image($vehicle['Vehicle']['img'], array('alt'=>'Image coming soon','style'=>'width:100%')); ?>
</div>
</div>
