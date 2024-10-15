<?= $this->extend('layout/main') ?>

<?= $this->section('contents') ?>

<?= $this->include('components/about/about_hero') ?>

<!-- <div>
    <h1>About</h1>
</div> -->

<section id="AboutEtihad">
    <div class="container">
        <h2>About Etihad</h2>
        <p>Welcome to Etihad Airways, the national airline of the UAE. From our home in Abu Dhabi, we fly to passenger
            and cargo
            destinations in the Middle East, Africa, Europe, Asia, Australia and North America. Together with our
            codeshare
            partners, our network offers access to hundreds of international destinations in just one booking.

            We believe that your journey with us should be more than just travel. We offer you a personalised
            experience, with
            options and choices every step of the way.</p>
    </div>
</section>

<section id="EthicsCompliance">
    <h2>Ethics & Compliance</h2>
    <p>We understand that our reputation is judged by how we act. This is why our core values emphasise the importance
        of doing business with integrity and taking responsibility to do what is right and ethical at all times. These
        values underpin the Etihad Airways Code of Business Conduct and are central to how we interact with our
        customers and suppliers.

        To ensure our continued compliance with our Code of Business Conduct, Etihad’s Ethics Line is designed to allow
        employees, customers, members of the public and other stakeholders to raise concerns and report potential
        breaches of our values.</p>
    <div class="accordion" id="ethicsAccordion">
        <div class="accordion-item">
            <h3 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    Ethics Line
                </button>
            </h3>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                data-bs-parent="#ethicsAccordion">
                <div class="accordion-body">
                    <p>It is Etihad’s 24 hour global reporting service, operated by an independent company, where you
                        can ask questions
                        or raise concerns in confidence about matters of compliance with the Etihad Code of Business
                        Conduct or the law.
                    </p>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h3 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Who can use Ethics Line?
                </button>
            </h3>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                data-bs-parent="#ethicsAccordion">
                <div class="accordion-body">
                    <p>Ethics Line is open to all employees, customers and other stakeholders to report their concerns.
                        However, it
                        cannot be used to report general customer or other complaints.</p>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h3 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    How can I report a concern via Ethics Line?
                </button>
            </h3>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                data-bs-parent="#ethicsAccordion">
                <div class="accordion-body">
                    <p>It's quick and easy to let us know if you have a concern, and you can stay anonymous if you'd
                        prefer. Simply
                        visit Ethics Line to submit an online report or raise your concern via phone – all in the
                        language of your
                        choice.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="ForTheWorld">
    <h2>For The World</h2>
    <p>Etihad is committed to achieving high standards in sustainability within our industry, aligned with global
        frameworks and the goals of the United Arab Emirates. We do this by working to identify the "million little
        things" that will come together to see incremental, measurable, and overall beneficial change of our
        environmental impacts, both as an airline and the industry. We work closely with partners in every corner of our
        value chain and know that progress is most effective when contributed by all minds thinking as one.</p>
    <h3>Environmental Sustainability & Climate Action for Aviation</h3>
    <p>For Etihad, "Environmental Sustainability" refers to the effort to reduce or manage the impact of aviation and
        our business on the environment while maintaining the ability to fulfil our obligations as a business (including
        operational and commercial growth) and perform in line with the global definitions of sustainable development.
    </p>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h4>Our Principals</h4>
                <ul>
                    <li>Achieve majority of emissions reductions through in-sector measures.</li>
                    <li>Align with industry voluntary roadmaps and frameworks.</li>
                    <li>Collaborate with UAE industrial ecosystems to maintain thought leadership.</li>
                    <li>Remain transparent and proactive in sustainability issues.</li>
                    <li>Continually develop strategic roadmap for targets.</li>
                </ul>
            </div>
            <div class="col-md-6">
                <img src="assets/images/Etihad-PlaneTails.jpg" alt="Our Principals Image" class="img-principal">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h4>Our Objectives</h4>
                <ul>
                    <li>Achieve Net Zero by 2050 in line with the commitments of the government of the United Arab Emirates and
                        ICAO (International Civil Aviation Authority) to the Paris Agreement.</li>
                    <li>Ensure economic viability in sustainability roadmaps toward 2050 target.</li>
                    <li>Create initiatives which positively contribute to guest experience and engagement.</li>
                    <li>Involve supply chain partners in roadmap through innovation and collaboration.</li>
                    <li>Support UAE and Abu Dhabi wildlife and biodiversity.</li>
                </ul>
            </div>
            <div class="col-md-6">
                <img src="assets/images/Etihad-Econ.jpg" alt="Our Objectives Image" class="img-obj">
            </div>
        </div>
    </div>
</section>

<?= $this->endsection('contents') ?>