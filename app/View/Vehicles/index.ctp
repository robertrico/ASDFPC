	
<div class="col-md-12">
	<div class="panel panel-default">
    	<div class="panel-heading">
			<center>
        	<h3 class="panel-title" style="font-size:130%">Automobile Auction Mock-Up</h3>
			</center>
        </div></br>
		<center><p>This is a mock up of a car auction. It has a lot of backend logic applied to it.</br>It doesn't accept lower bids, it has an update function for cars older than two weeks to be closed. Bids can only be place when logged in. </br> Also, car adding is very easy.</center>
	

<div class="panel-body" >
			<div class="col-md-2">
			</div>
			<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title" style="font-size:130%">Vehicles
 <p style="float:right"><?php echo $this->Html->link('Add Car',array('controller' => 'vehicles', 'action' => 'add'));?></p></h3>
					</div>
	<table style="width:100%">
	<thead>
	<tr>
			<th><?php echo __('Click to view'); ?></th>
			<th><?php echo ''; ?></th>
			<th><?php echo $this->Paginator->sort('make'); ?></th>
			<th><?php echo $this->Paginator->sort('model'); ?></th>
			<th><?php echo $this->Paginator->sort('year'); ?></th>
			<th><?php echo $this->Paginator->sort('current_bid'); ?></th>
			<th><?php echo "Highest Bidder"; ?></th>
			
	</tr>
	</thead>
	<tbody>
	<?php foreach ($vehicles as $vehicle): ?>
	<tr>
		<td>
			<?php echo $this->Html->link(__('View Me!'), array('action' => 'view', $vehicle['Vehicle']['id'])); ?>
		</td>
		<td> <?php echo $this->Html->image($vehicle['Vehicle']['img'],array('style' => 'width:300px; height: 200px;', 'data-src'=>"holder.js/200x200", 'class' => 'img-thumbnail', 'alt' => '200x200')); ?>
		</td>
		<!--<td><img src=<?php echo WWW_ROOT.'img'.DS.$vehicle['Vehicle']['img'];?> style="width: 300px; height: 200px;" data-src="holder.js/200x200" class="img-thumbnail" alt="200x200"></td>-->
		<td><?php echo h($vehicle['Vehicle']['make']); ?>&nbsp;</td>
		<td><?php echo h($vehicle['Vehicle']['model']); ?>&nbsp;</td>
		<td><?php echo h($vehicle['Vehicle']['year']); ?>&nbsp;</td>
		<td>$<?php echo h($vehicle['Vehicle']['current_bid']); ?>&nbsp;</td>
		<td><?php echo h($vehicle['Vehicle']['high_bidder']); ?>&nbsp;</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
				</div>
			</div>
		</div>
    </div>
</div>
