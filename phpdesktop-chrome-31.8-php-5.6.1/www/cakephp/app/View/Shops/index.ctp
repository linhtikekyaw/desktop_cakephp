<?php $dispaly = array( '0' => '非表示', '1' => '表示' ); ?>

<div class="section form_search">
	<h2>検索項目</h2>
	<?php echo $this->Form->create('Shop', array( 'novalidate' => true, 'url' => array_merge(array('action' => 'index'), $this->params['pass']) )); ?>
	<h3>店舗名</h3>
	<?php echo $this->Form->input('name', array('placeholder' => '例）店舗名を入力して下さい。　※フリガナ可', 'label' => false)); ?>
	<h3>公開設定</h3>
	<?php echo $this->Form->select('display', $dispaly, array( 'empty' => 'すべて', 'label' => false )); ?>
	<?php echo $this->Form->submit('検索'); ?>
	<?php echo $this->Form->end(); ?>
</div>

<div class="section">
	<h2>店舗一覧</h2>
	<table>
		<tr>
			<th><?php echo $this->Paginator->sort('id', 'ID'); ?></th>
			<th><?php echo $this->Paginator->sort('name', '店舗名'); ?></th>
			<th><?php echo $this->Paginator->sort('display', '公開設定'); ?></th>
		</tr>

		<?php foreach($shopList as $shop): ?>

		<tr>
			<td><?php echo h($shop['Shop']['id']); ?></td>
			<td><?php echo h($shop['Shop']['name']); ?></td>
			<td><?php echo $dispaly[h($shop['Shop']['display'])]; ?></td>
		</tr>

		<?php endforeach; ?>

	</table>
</div>


<div class="paginateLinks">
	<?php echo $this->Paginator->prev(); ?>&nbsp;
	<?php echo $this->Paginator->numbers(); ?>&nbsp;
	<?php echo $this->Paginator->next(); ?>
</div>

<?php echo $this->Html->css('shop_index', null, array( 'inline' => false )); ?>