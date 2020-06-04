@extends('fontend.base')
@section('content')
		<div class="ct-banner pb-5">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="container-img">
							<ul class="thumb">
								<li><a href="fontend/assets/img/product-demo1.jpg" target="imgBox"> <img src="fontend/assets/img/product-demo1.jpg" alt=""> </a></li>
								<li><a href="fontend/assets/img/category demo.jpg" target="imgBox"> <img src="fontend/assets/img/category demo.jpg" alt=""> </a></li>
								<li><a href="fontend/assets/img/product-demo1.jpg" target="imgBox"> <img src="fontend/assets/img/product-demo1.jpg" alt=""> </a></li>
							</ul>
							<div class="imgBox">
								<img src="fontend/assets/img/product-demo1.jpg" alt="" srcset="">
							</div>
							
						</div>
					</div>
					<div class="col-md-6">
						<div class="detail mt-5">
							<h1>Dshwasher Detergent</h1>
							<div class="detail-star">
								<div class="ratingStarContainer">
									<input type="radio" name="starRating-2" id="star1">
									<label for="star1"><i class="fa fa-star"></i></label>
									<input type="radio" name="starRating-2" id="star2">
									<label for="star2"><i class="fa fa-star"></i></label>
									<input type="radio" name="starRating-2" id="star3">
									<label for="star3"><i class="fa fa-star"></i></label>
									<input type="radio" name="starRating-2" id="star4">
									<label for="star4"><i class="fa fa-star"></i></label>
									<input type="radio" name="starRating-2" id="star5">
									<label for="star5"><i class="fa fa-star"></i></label>
								</div>
								<div class="detail-star-span">
									<span class="detail-span"> (6 customer reviews) </span>
									<span> 3 sold</span>
								</div>
							</div>
						</div>
						<div class="detail-content mt-3">
							<h3>$89.00 – $500.00 </h3>
							<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam.</p>
						</div>
						<div class="detail-button">
							<button class="btn-1">Thêm vào giỏ</button>
							<button class="btn-2">Mua ngay</button>
							<button class="btn-3"><i class="fa fa-heart"></i></button>
							
						</div>
						<hr>
						<div class="detail-info mt-3">
							<span class="sku-wrapper">Categories:
								<span class="sku">
									<a href="#">khanh</a>,
									<a href="#">khanh2</a>,
									<a href="#">khanh3</a>.
								</span>
							</span>
							<span class="sku-wrapper">Tags:
								<span class="sku">
									<a href="#">khanh</a>,
									<a href="#">khanh2</a>,
									<a href="#">khanh3</a>.
								</span>
							</span>
							<span class="sku-wrapper">Nike:
								<span class="sku">
									<a href="#">khanh</a>,
									<a href="#">khanh2</a>,
									<a href="#">khanh3</a>.
								</span>
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	<div class="container">
		<div class="ct-info">
			<div class="tabs mt-5">
			    <input id="tab1" type="radio" name="grp" checked="checked" />
			    <label for="tab1"><span>Description</span></label>
			    <div class="ct-info-content">
			    	<div class="row">
			    		<div class="col-md-6">
			    			<h3>Product Details</h3>
			    			<ul>
			    				<li>Name: Folding stool</li>
			    				<li>Material: PP+ iron</li>
			    				<li>Gross weight: 550g</li>
			    				<li>Summary: PP+ iron material, thick legs, strong bearing capacity, stable and firm, foldable, free to open and close, no space to carry, non-slip mat on the bottom, not easy to slip, easy to carry at home and outdoor, easy to carry</li>
			    			</ul>
			    		</div>
			    		<div class="col-md-6">
			    			<h3>Item specifics</h3>
			    			<ul>
			    				<li>General Use:Outdoor Furniture</li>
			    				<li>Specific Use:Beach Chair</li>
			    				<li>Appearance:Modern</li>
			    				<li>Size:23.5*32*5cm</li>
			    				<li>Style:FOLDING CHAIR</li>
			    				<li>Material:Plastic</li>
			    			</ul>
			    		</div>
			    	</div>
			    </div>

			    <input id="tab2" type="radio" name="grp" />
			    <label for="tab2"><span>Review (0)</span></label>
			    <div>Magni vel officiis expedita dolore adipisci nam praesentium id perspiciatis libero autem voluptatibus eligendi ea, illum, cum quos ducimus laboriosam itaque culpa recusandae a excepturi officia amet doloribus atque? Eaque?</div>

			    <input id="tab3" type="radio" name="grp" />
			    <label for="tab3"><span>Question & Answers (1)</span></label>
			    <div>Velit obcaecati tempore libero alias, non pariatur rem eligendi minima, labore harum at impedit beatae, modi ea quaerat voluptatum! Magni deserunt quaerat fuga rerum adipisci odit perferendis mollitia, molestiae explicabo.</div>

			    <input id="tab4" type="radio" name="grp" />
			    <label for="tab4"><span>Shipping</span></label>
			    <div>Accusamus recusandae quam cupiditate eius, aspernatur voluptates, provident odit autem, dolor nesciunt mollitia neque corrupti repudiandae eveniet? Iusto, iure? Impedit tempore ullam possimus rerum maxime quisquam autem nostrum delectus. Ullam.</div>
			</div>
		</div>
	</div>
@endsection