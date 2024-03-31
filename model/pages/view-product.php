<!-- view-product -->
<?php

?>

<div class="page-content">
		
		<div class="d-sm-flex justify-content-between container-fluid py-3">
			<nav aria-label="breadcrumb" class="breadcrumb-row">
				<ul class="breadcrumb mb-0">
					<li class="breadcrumb-item"><a href="index.html"> Home</a></li>
					<li class="breadcrumb-item">Product With Details</li>
				</ul>
			</nav>
		</div>
		
		<section class="content-inner py-0">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-6 col-md-6">
						<div class="dz-product-detail sticky-top">
							<div class="swiper-btn-center-lr">
								<div class="swiper product-gallery-swiper2">
									<div class="swiper-wrapper" id="lightgallery">
										<div class="swiper-slide">
											<div class="dz-media DZoomImage">
												<a class="mfp-link lg-item" href="<?=$itemimage?>" data-src="<?=$itemimage?>">
													<i class="feather icon-maximize dz-maximize top-right"></i>
												</a>
												<img src="<?=$itemimage?>" alt="image">
											</div>
										</div>
										<div class="swiper-slide">
											<div class="dz-media DZoomImage">
												<a class="mfp-link lg-item" href="<?=$itemimage2?>" data-src="<?= $itemimage2?>">
													<i class="feather icon-maximize dz-maximize top-right"></i>
												</a>
												<img src="<?=$itemimage2?>" alt="image">
											</div>
										</div>
										<div class="swiper-slide">
											<div class="dz-media DZoomImage">
												<a class="mfp-link lg-item" href="<?=$itemimage3?>" data-src="<?=$itemimage3?>">
													<i class="feather icon-maximize dz-maximize top-right"></i>
												</a>
												<img src="<?=$itemimage3?>" alt="image">
											</div>
										</div>
									
									</div>
								</div>
								<div class="swiper product-gallery-swiper thumb-swiper-lg swiper-vertical">
									<div class="swiper-wrapper">
										<div class="swiper-slide">
											<img src="<?=$itemimage?>" alt="image">
										</div>
										<div class="swiper-slide">
											<img src="<?=$itemimage2?>" alt="image">
										</div>
										<div class="swiper-slide">
											<img src="<?=$itemimage3?>" alt="image">
										</div>
									
									</div>
								</div>
							</div>	
						</div>	
					</div>
					<div class="col-xl-6 col-md-6">
						<div class="dz-product-detail style-2 p-t50">
							<div class="dz-content">
								<div class="dz-content-footer">
									<div class="dz-content-start">
									
										<h4 class="title mb-1"><a href="shop-list.html"><?= $itemName?></a></h4>
										<div class="review-num">
										
										
											<a href="javascript:void(0);"><?=$categoryname?></a>
										</div>
									</div>
								</div>
								<p class="para-text">
								<?= $itemshortDescription?>
								</p>
							
						
								<div class="btn-group cart-btn">
									<a href="<?=base()?>Contact-us/" class="btn btn-secondary text-uppercase">OrderNow</a>
									<a href="shop-wishlist.html" class="btn btn-light btn-icon">
                                    <i class="fas fa-share"></i>
										Share
									</a>
								</div>
								<div class="dz-info">
									<ul>
										<li>
											<strong>Description:</strong>
											<span><?= $itemdescription?></span>
										</li>
									
									</ul>
								</div>
								<ul class="d-md-flex d-none align-items-center">
									<li class="icon-bx-wraper style-3 me-xl-4 me-2">
										<div class="icon-bx">
											<i class="flaticon flaticon-ship"></i>
										</div>
										<div class="info-content">
											<span>FREE</span>
											<h6 class="dz-title mb-0">Shipping</h6>
										</div>
									</li>
						
								</ul>
							</div>
							<div class="banner-social-media">
								<ul>
									<li>
										<a href="javascript:void(0);">Instagram</a>
									</li>
									<li>
										<a href="javascript:void(0);">Facebook</a>
									</li>
									<li>
										<a href="javascript:void(0);">twitter</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

	</div>
	