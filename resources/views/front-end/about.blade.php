

    
        @include('front-end.layouts.header');
        
    <header class="contact-header"> 

        <div class="about">
            <div class="content">
                <h1>
                    Abo<span style="border-bottom: 3px solid #fbc045;">ut Us</span>
                    <!-- <img class="forward" src="./Assests/images/choose.png" alt=""> -->
                </h2>
                <p>Apex & Co. is an investment company
                    registered under companies Act 2017
                    based out in Gilgit-Baltistan, offering wide
                    spectrum of services including investment
                    services and facilitation to both public and
                    private sectors entities and individuals
                    seeking business advisory services.
                </p>
                <p style="margin-top: 15px;">

                    The firm is led by a team of qualified and widely experienced professionals who have
                    been passionate about achieving better
                    results for our valued investors — results
                    that stretch beyond financial and are
                    exceptionally tailored, pragmatic, holistic
                    and enduring.
                </p>
            </div>
        </div>
    </header>
    <section class="bg">
        <section class="vision">
            <div class="vission-inner">
                <div class="vision-content">
                    <h1>
                        Vis<span style="border-bottom: 3px solid #fbc045;">ion</span>
                    </h1>
                </div>
                <div class="cards">
                    <div class="card one">
                        <img src="{{asset('front-end')}}/Assests/images/img-1.png" alt="">
                        <h4>Client Needs</h4>
                        <p> Anticipating client needs and being forthright in our views to ensure the best outcome for
                            them
                        </p>
                    </div>
                    <div class="card two">
                        <img src="{{asset('front-end')}}/Assests/images/img-2.png" alt="">
                        <h4>Communication</h4>
                        <p>Being clear, open & swift in our communication
                        </p>
                    </div>
                    <div class="card three">
                        <img src="{{asset('front-end')}}/Assests/images/img-3.png" alt="">
                        <h4>Commitment</h4>
                        <p>
                            Agreeing to and meeting our commitments: we deliver what we promise, everyday, for every
                            client
                        </p>
                    </div>
                    <div class="card four">
                        <img src="{{asset('front-end')}}/Assests/images/img-4.png" alt="">
                        <h4>people</h4>
                        <p>
                            Providing the right environment for our people and the right people for our clients
                        </p>
                    </div>
                    <div class="card five">
                        <img src="{{asset('front-end')}}/Assests/images/img-5.png" alt="">
                        <h4>Value</h4>
                        <p>
                            Creating value through giving clients up to date ideas and valuable insight and advice that
                            they
                            can
                            trust
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="mission">
            <div class="mission-container">
                <div class="mission-inner-content">
                    <h1>
                        Miss<span style="border-bottom: 3px solid #fbc045;">ion</span>
                        <!-- <img class="forward" src="./Assests/images/choose.png" alt=""> -->
                    </h1>
                </div>
                <p>
                    We strive to exceed expectations of our valued partners
                    whilst providing measurable benefits through our full
                    range of cutting-edge solutions to cherish their success by
                    establishing long lasting relationship based on reliability,
                    trust & integrity.
                </p>
            </div>
        </section>
    </section>

    <section class="value">
        <div class="value-content">
            <h1>
                Val<span style="border-bottom: 3px solid #fbc045;">ues</span>
            </h1>
        </div>
        <div class="cards">
            <div class="card one">
                <img src="{{asset('front-end')}}/Assests/images/value-honesty.png" alt="">
                <h4>Integrity and Honesty</h4>
            </div>
            <div class="card two">
                <img src="{{asset('front-end')}}/Assests/images/value-lock.png" alt="">
                <h4>Confidentiality</h4>
            </div>
            <div class="card three">
                <img src="{{asset('front-end')}}/Assests/images/value-natue.png" alt="">
                <h4>Nature</h4>
            </div>
            <div class="card four">
                <img src="{{asset('front-end')}}/Assests/images/value-flag.png" alt="">
                <h4>Independence</h4>
            </div>
        </div>
    </section>
    @include('front-end.layouts.footer')