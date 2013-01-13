<h1>Latest products</h1>

<ul class="products">
	<?php foreach($products as $product): ?>
	<li>
		<a href="<?php echo $base; ?>product/<?php echo $product->slug; ?>">
			<img src="http://localhost:1000/posts/avatars/img/<?php echo rand(1,5); ?>.jpg" width="265" height="<?php echo rand(150, 500); ?>">
			
			<span class="caption">
				<h2><?php echo $product->name; ?></h2>
				<small class="price"><?php echo Config::get('currency') . $product->price; ?></small>
			</span>
		</a>
	</li>
	<?php endforeach; ?>
</ul>