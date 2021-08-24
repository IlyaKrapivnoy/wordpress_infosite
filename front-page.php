<?php
get_header();
?>

<main>
        <div class="container">
            <div class="about">
                <div class="section-title">
                    <?php the_field('section-top-title'); ?>
                    <!-- About -->
                </div>
                <div class="section-top-description">
                    <?php the_field('section-description'); ?>    
                    <!-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores in incidunt aliquam quos! -->
                </div>
                <div class="about-pic">
                    <img src="<?php echo get_template_directory_uri (); ?>/images/about.jpeg" alt="a guy is going out">
                </div>
                <div class="about-content">
                    <div class="column">
                        <div class="column-title">
                            <?php the_field('section-column-title-1'); ?>  
                            <!-- Why should you choose us? -->
                        </div>
                        <p>
                            <?php the_field('section-column-text-1'); ?>  
                            <!-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio maxime consectetur fugiat facilis voluptas placeat ex saepe quis harum. Nostrum aspernatur doloribus tempora? Cupiditate consectetur, numquam doloribus a officia magni quas omnis praesentium minus aperiam animi atque, voluptatibus placeat in? -->
                        </p>
                    </div>
                    <div class="column">
                        <div class="column-title">
                            <?php the_field('section-column-title-2'); ?>  
                            <!-- Why they sicretly have already choosen us? -->
                        </div>
                        <p>
                            <?php the_field('section-column-text-2'); ?>  
                            <!-- Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus a ullam earum fugiat voluptatibus illo iste architecto, quo dolor eligendi provident error fugit maiores molestias quidem assumenda cum dolorum quaerat beatae eaque incidunt, deserunt fuga accusantium maxime? Maiores labore eligendi nam esse maxime blanditiis sequi modi quaerat? -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="comment-section">
            <div class="cards">
                <div class="container">
                    <div class="section-title">
                        <?php the_field('section-card-title'); ?>
                        <!-- Clients' comments -->
                    </div>
                    <div class="section-description">
                        <?php the_field('section-card-sapi_windows_cp_convdescription'); ?>
                        <!-- Lorem ipsum dolor sit, amet consectetur adipisicing elit. -->
                    </div>
                    <div class="card">
                        <div class="card-pic">
                            <img src="<?php echo get_template_directory_uri (); ?>/images/comment-1.jpeg" alt="a guy is going out">
                        </div>
                        <div class="card-comment">
                            <blockquote>
                                I like to use this WP theme because it helps me to communicate with my audience in the best possible way.
                            </blockquote>
                            <figcaption>
                                &mdash; Martha S., <cite>Western Bank</cite>
                            </figcaption>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-comment">
                            <blockquote>
                                It was a real pleasure to work on this website. I have never been more sutisfied.
                            </blockquote>
                            <figcaption>
                                &mdash; Karl B., <cite>Total Com</cite>
                            </figcaption>
                        </div>
                        <div class="card-pic">
                            <img src="<?php echo get_template_directory_uri (); ?>/images/comment-2.jpeg" alt="a guy is going out">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="form-section">
                <div class="section-title">
                    <?php the_field('section-contact-title'); ?>
                    <!-- Contact Us -->
                </div>
                <div class="section-description">
                    <?php the_field('section-contact-description'); ?>
                    <!-- This is your small step to the big future. -->
                </div>
                
                
                <form action="">
                    <?php echo do_shortcode(' [contact-form-7 id="13" title="Контактная форма 1"] '); ?>
                    <!-- <div class="row">
                        <div class="col-25">
                            <label for="fname">First Name</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="fname" name="firstname" placeholder="Your name...">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="lname">Last Name</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="lname" name="lastname" placeholder="Your last name...">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="subject">Subject</label>
                        </div>
                        <div class="col-75">
                            <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <input type="submit" value="Submit">
                    </div> -->
                </form> 
            </div>
        </div>
    </main>
</div> <!-- content ends -->


<?php
get_footer();