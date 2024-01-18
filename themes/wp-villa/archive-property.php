<?php get_header(); ?>

<div class="page-heading header-text">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <span class="breadcrumb"><a href="#">Home</a> / Properties</span>
                <h3>Properties</h3>
            </div>
        </div>
    </div>
</div>

<div class="section properties">
    <div class="container">
        <ul class="properties-filter">
            <li>
                <a class="is_active" href="#!" data-filter="*">Show All</a>
            </li>
            <li>
                <a href="#!" data-filter=".adv">Apartment</a>
            </li>
            <li>
                <a href="#!" data-filter=".str">Villa House</a>
            </li>
            <li>
                <a href="#!" data-filter=".rac">Penthouse</a>
            </li>
        </ul>
        <div class="row properties-box">
            <?php
            while (have_posts()) {
                the_post(); ?>
                <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 adv">
                    <div class="item">
                        <a href="<?php the_permalink(); ?>"><img src="assets/images/property-01.jpg" alt=""></a>
                        <span class="category"><?php the_field('property_type'); ?></span>
                        <h6>$<?php the_field('property_price'); ?></h6>
                        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                        <ul>
                            <li>Bedrooms: <span><?php the_field('property_bedrooms'); ?></span></li>
                            <li>Bathrooms: <span><?php the_field('property_bathrooms'); ?></span></li>
                            <li>Area: <span><?php the_field('property_area'); ?>m2</span></li>

                            <li>Parking: <span><?php the_field('property_parking_spots'); ?> cars</span></li>
                        </ul>
                        <div class="main-button">
                            <a href="<?php the_permalink(); ?>">View Villa</a>
                        </div>
                    </div>
                </div>
            <?php }
            ?>

        </div>
        <div class="row">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li><a href="#">1</a></li>
                    <li><a class="is_active" href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">>></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>