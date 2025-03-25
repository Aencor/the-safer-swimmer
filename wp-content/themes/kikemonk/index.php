<?php get_header(); ?>
<main class="global-main py-5">
    <div class="container xl mx-auto px-4 sm:px-0">
        <div class="info-container max-w-screen-lg mx-auto mb-24">
            <h1 class="text-center">Welcome to The Safer Swimmer</h1>
            <p class="lead">The Safer Swimmer was founded in 2023 as the formal parent company of Premier Aquatics, uniting a dedicated management team to oversee operations, HR, marketing, finance, and executive leadership.</p>
            <p class="lead">In 2011, Dan Berzansky founded Premier Recreation Services as a full-service aquatic and recreation programming company. In its firs year, Premier Recreation Services began with two contracts—Emerald Bay Community Association and the City of Aliso Viejo—offering summer camp programming, after-school activities, event planning, lifeguard services, swim lessons, and swim team programs.</p>
            <p class="lead">By 2014, Premier Recreation Services had experienced rapid growth in the aquatics space, expanding to serve 10 contracts throughout Orange County. In 2015, we streamlined our focus to aquatic services, leading to a pivotal rebrand. Premier Recreation Services officially became Premier Aquatic Services (Premier Aquatics), specializing solely in aquatics. That same year, we launched Premier Health and Safety, offering training programs for both private individuals and public organizations.</p>
            <p class="lead">In 2019, Premier Aquatics took another exciting step forward, breaking ground on its first indoor swim school. Premier Swim Academy opened its doors in Rancho Cucamonga in July 2020, followed by a second location in Diamond Bar, CA, in early 2023, after converting the former Maple Hill YMCA into a state-of-the-art swim school.</p>
            <p class="lead">Today, Premier Aquatics continues to expand, managing over 40 contracts and staffing nearly 100 locations across Arizona, California, and Utah. At The Safer Swimmer, we remain dedicated to delivering exceptional aquatic services, promoting safety, education, and a lifelong love of swimming in every community we serve.</p>
        </div>
        <div class="cards-container grid grid-cols-1 md:grid-cols-2 gap-8 max-w-screen-lg mx-auto">
            <div class="card">
                <div class="image-container flex items-center justify-center">
                    <img class="max-h-full" src="<?= bloginfo('template_url')?>/assets/img/logos/premier_aquatics_vector_file.png" alt="">
                </div>
                <div class="title-container">
                    <h2 class="text-center">Premier Aquatics</h2>
                    <div class="text-container">
                        <p class="lead">Beginning in 2023, Premier Aquatics refocused its core service to deliver lifeguard services to private organizations, cities, HOAs, municipalities, and governmentagencies.</p>
                            <div class="btn-visit-container flex items-center justify-center">
                                <a target="_blank" href="https://swimoc.com/" class="btn btn-primary btn-large">
                                    Visit Website
                                </a>
                            </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="image-container flex items-center justify-center">
                    <img class="max-h-full" src="<?= bloginfo('template_url')?>/assets/img/logos/Health_and_Safety.png" alt="">
                </div>
                <div class="title-container">
                    <h2 class="text-center">Premier Health & Safety</h2>
                    <div class="text-container">
                        <p class="lead">Premier Health and Safety offers training for both public and private groups, including lifeguard certification through the American Red Cross and StarGuard Elite, as well as CPR/AED and first aid training. Private training courses are available upon request.</p>
                            <div class="btn-visit-container flex items-center justify-center">
                                <a target="_blank" href="https://premierhealthandsafety.com/" class="btn btn-primary btn-large">
                                    Visit Website
                                </a>
                            </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="image-container flex items-center justify-center">
                    <img class="max-h-full" src="<?= bloginfo('template_url')?>/assets/img/logos/PSA_Logo.png" alt="">
                </div>
                <div class="title-container">
                    <h2 class="text-center">Premier Swim Academy</h2>
                    <div class="text-container">
                            <p class="lead">Premier Swim Academy offers swim schools and programs at our main locations in Aliso Viejo, Diamond Bar, and Rancho Cucamonga, along with seasonal programs across California, Arizona, and Utah.</p>
                        <div class="btn-visit-container flex items-center justify-center">
                            <a target="_blank" href="https://premierswimacademy.com/" class="btn btn-primary btn-large">
                                Visit Website
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="image-container flex items-center justify-center">
                    <img class="max-h-full" src="<?= bloginfo('template_url')?>/assets/img/logos/The_Pool_Pros_Logo.png" alt="">
                </div>
                <div class="title-container">
                    <h2 class="text-center">The Pool Pros</h2>
                    <div class="text-container">
                            <p class="lead">The Pool Pros provides maintenance and repair services to commercial facilitiesand residential homes through Orange County</p>
                        <div class="btn-visit-container flex items-center justify-center">
                            <a target="_blank" href="https://thepoolprosusa.com/" class="btn btn-primary btn-large">
                                Visit Website
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>
