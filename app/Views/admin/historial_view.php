<?= $this->include('admin\header.php'); ?>
<style>
    .timeline-steps {
        display: flex;
        justify-content: center;
        flex-wrap: wrap
    }

    .timeline-steps .timeline-step {
        align-items: center;
        display: flex;
        flex-direction: column;
        position: relative;
        margin: 1rem
    }

    @media (min-width:768px) {
        .timeline-steps .timeline-step:not(:last-child):after {
            content: "";
            display: block;
            border-top: .25rem dotted #3b82f6;
            width: 3.46rem;
            position: absolute;
            left: 7.5rem;
            top: .3125rem
        }

        .timeline-steps .timeline-step:not(:first-child):before {
            content: "";
            display: block;
            border-top: .25rem dotted #3b82f6;
            width: 3.8125rem;
            position: absolute;
            right: 7.5rem;
            top: .3125rem
        }
    }

    .timeline-steps .timeline-content {
        width: 10rem;
        text-align: center
    }

    .timeline-steps .timeline-content .inner-circle {
        border-radius: 1.5rem;
        height: 1rem;
        width: 1rem;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background-color: #3b82f6
    }

    .timeline-steps .timeline-content .inner-circle:before {
        content: "";
        background-color: #3b82f6;
        display: inline-block;
        height: 3rem;
        width: 3rem;
        min-width: 3rem;
        border-radius: 6.25rem;
        opacity: .5
    }
</style>
<div class="py-3 container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title"><i class="lead mr-2 icon ion-md-clock"></i>Historial</h4>
            <h6 class=" card-subtitle mb-2 text-muted">Historial de compras de cada cliente</h6>
            <hr>
            <div class="row">
                <div class="col">
                    <div class="timeline-steps aos-init aos-animate" data-aos="fade-up">
                        <div class="timeline-step">
                            <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2003">
                                <div class="inner-circle"></div>
                                <p class="h6 mt-3 mb-1">2003</p>
                                <p class="h6 text-muted mb-0 mb-lg-0">Favland Founded</p>
                            </div>
                        </div>
                        <div class="timeline-step">
                            <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2004">
                                <div class="inner-circle"></div>
                                <p class="h6 mt-3 mb-1">2004</p>
                                <p class="h6 text-muted mb-0 mb-lg-0">Launched Trello</p>
                            </div>
                        </div>
                        <div class="timeline-step">
                            <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2005">
                                <div class="inner-circle"></div>
                                <p class="h6 mt-3 mb-1">2005</p>
                                <p class="h6 text-muted mb-0 mb-lg-0">Launched Messanger</p>
                            </div>
                        </div>
                        <div class="timeline-step">
                            <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2010">
                                <div class="inner-circle"></div>
                                <p class="h6 mt-3 mb-1">2010</p>
                                <p class="h6 text-muted mb-0 mb-lg-0">Open New Branch</p>
                            </div>
                        </div>
                        <div class="timeline-step mb-0">
                            <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2020">
                                <div class="inner-circle"></div>
                                <p class="h6 mt-3 mb-1">2020</p>
                                <p class="h6 text-muted mb-0 mb-lg-0">In Fortune 500</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?= $this->include('admin\footer.php'); ?>