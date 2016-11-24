<div class="row">
	<div class="span4">
		<?php if(!empty($posts)) : ?>
			<?php foreach($posts as $content) : ?>
			<div class="post">
				<table>
					<tr><th><?= $content['title'] ?></th></tr>
					<tr><td><?= $content['body'] ?></td></tr>
					<tr><td>latitude - <?= rtrim($content['lat'], '0') ?></td></tr>
					<tr><td>longitude - <?= rtrim($content['lng'], '0') ?></td></tr>
				</table>
			</div>
			<?php endforeach; ?>
		<?php endif; ?>
		<a class="btn btn-inverse" href="/post/create">Create</a>
		<a class="btn btn-inverse" href="/post/my">my notation</a>
	</div>
	<div class="span8">
		<div id="map" class="map frame"></div>	
	</div>
</div>
<div id="posts" data-post='<?= !empty($posts) ? json_encode($posts) : '' ; ?>'></div>
<script src="/webroot/js/require.js" data-main="/webroot/js/index.js"></script>
