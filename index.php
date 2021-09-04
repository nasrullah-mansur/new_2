<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- CSS for calculation form -->
        <link rel="stylesheet" href="assets/css/jquery-ui.css">
        <?php
            include 'includes/header-meta.php';
        ?>
    </head>
    <body>
        <!-- Header start -->
        <?php
            include 'includes/header.php';
        ?>
        <!-- Header end -->

        <!-- Banner start -->
        <section class="banner">
            <div class="container">
                <div class="slider-text">
                    <h1 class="text-capitalize">urgent bail bonds and loans</h1>
                    <h1 class="text-capitalize">urgent bail bonds and loans</h1>
                    <h1 class="text-capitalize">urgent bail bonds and loans</h1>
                </div>
                <a class="text-uppercase btn-style-one" href="#">LET'S GET STARTED</a>
                <p>This service is FREE and checking your loan offers won't affect your credit score.</p>
            </div>
        </section>
        <!-- Banner end -->

        <!-- How loan start -->
        <section class="how-loan section-padding">
            <div class="container">
                <div class="section-title">
                    <h2 class="text-uppercase text-center">BAIL BONDS AND LOANS</h2>
                </div>
                <div class="how-loan-items">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 mb-30">
                            <div class="single-item">
                                <img src="assets/images/icon-credit-card.png" alt="icon" />
                                <h3>Loans for Bail up to $5,000</h3>
                                <p>Need cash or financing for bail bonds, cash bonds or bail bonds laywers? Online lenders, bail bondsman, bail bonds attorneys with payment plans near you. There's no risk, no cost and no obligation.</p>
                                <a href="#" class="btn-style-two text-uppercase">MORE ABOUT BAIL</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 mb-30">
                            <div class="single-item">
                                <img src="assets/images/icon-list-currency.png" alt="icon" />
                                <h3>Cash Advance Bail Loans</h3>
                                <p>Apply for a bail bonds loan if you need cash to bail someone out of jail or to hire a bail bonds lawyer – onilne bail bonds, no money down, no collateral, flexible payment plans are available.</p>
                                <a href="#" class="btn-style-two text-uppercase">MORE ABOUT US</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 mb-30">
                            <div class="single-item">
                                <img src="assets/images/icon-feature.png" alt="icon" />
                                <h3>Bail Bond Payment Plans</h3>
                                <p>
                                    Our lending and bail agent partners may be able to help with a loan or payment plan for a bail bond, cash bond, immigration bond or bail bonds lawyer. Review the terms of the offer and decide if it's
                                    right for you.
                                </p>
                                <a href="#" class="btn-style-two text-uppercase">MORE QUESTIONS</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- How loan end -->

        <!-- Loan calculate start -->
        <section class="loan-calculate section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mb-30">
                        <div class="calculate-text">
                            <h2>How AllHumanity works</h2>
                            <p>3 Steps. Instant Decision.</p>
                            <div class="list">
                                <div class="list-item">
                                    <span>1</span>
                                    <h4>Answer a few questions</h4>
                                    <p>Take just two minutes to answer questions about yourself and the loan you need.</p>
                                </div>
                                <div class="list-item">
                                    <span>2</span>
                                    <h4>Compare your offers</h4>
                                    <p>Get prequalified and compare personal loan offers based on APR and monthly payments.</p>
                                </div>
                                <div class="list-item">
                                    <span>3</span>
                                    <h4>Pick Terms and E-sign Docs</h4>
                                    <p>Select the amount you want to finance, set up your payment plan and e-sign your loan documents.</p>
                                </div>
                            </div>
                            <a href="#" class="btn-style-two text-uppercase ml-md-4">get started</a>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-30">
                        <div class="calculator">
                            <!-- Loan Calculate start -->
                            <div class="loan-calculate">
                                <h2>Calculate Your Payment</h2>
                                <div class="figure">
                                    <div class="output">
                                        <span>$1000</span>
                                        <input readonly id="amount-one" type="text" />
                                        <span>$100000</span>
                                    </div>
                                    <div id="range-one"></div>
                                </div>
                                <div class="figure">
                                    <div class="output">
                                        <span>6 Months</span>
                                        <input readonly id="amount-two" />
                                        <span>60 Months</span>
                                    </div>
                                    <div id="range-two"></div>
                                </div>
                                <div class="interest">
                                    <div class="content">
                                        <span>Total Monthly Payment @ 4.99%</span>
                                        <p class="ml">$<span class="d-inline-block" id="total-interest"></span></p>
                                    </div>
                                </div>
                                <div class="figure total-pay">
                                    <p>Total you will Pay:</p>
                                    <h4>$<span id="total-pay">250</span></h4>
                                </div>
                                <!-- Loan data calculation form start -->
                                <form action="instant-approval.php" method="POST">
                                    <!-- Input value auto set by javascript -->
                                    <input id="get-total-loan" type="hidden" name="total" />
                                    <button type="submit" class="btn-style-four text-uppercase">apply now</button>
                                </form>
                                <!-- Loan data calculation form end -->
                            </div>
                            <!-- Loan Calculate end -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Loan calculate end -->

        <!-- Faq start -->
        <?php
            include 'includes/faq.php';
        ?>
        <!-- Faq end -->

        <!-- Footer start -->
        <?php
            include 'includes/footer.php';
        ?>
        <!-- Footer end -->

        <!-- Scripts -->
        <?php
            include 'includes/scripts.php';
        ?>
        <!-- Script for calculation form -->
        <script src="assets/js/jquery-ui.js"></script>
        <script>
            // Just set your value here;
            var SetRangeValue = {
                rangeOneActiveVal: 1000,
                rangeOneMinVal: 1000,
                rangeOneMaxVal: 100000,
                rangeOneSteep: 1000,
                rangeTwoActiveVal: 6,
                rangeTwoMinVal: 6,
                rangeTwoMaxVal: 60,
                rangeTwoSteep: 6,
                interestCount: 4.99,
            };

            // If you need updated value, use this.
            let myLoanCal = {
                loanAmount: SetRangeValue.rangeOneActiveVal,
                totalMonth: SetRangeValue.rangeTwoActiveVal,

                interestPerMonth: function () {
                    var TLoanAmount = this.loanAmount;
                    var TTotalMonth = this.totalMonth;
                    var TInterestCount = SetRangeValue.interestCount;
                    var output = ((TLoanAmount / 100) * TInterestCount + TLoanAmount) / TTotalMonth;
                    var outputOneYear = ((TLoanAmount / 100) * TInterestCount + TLoanAmount) / 12;
                    return output;
                },

                totalInterest: function (perYear = this.interestPerMonth(), totalMonth = this.totalMonth) {
                    var getVal = this.interestPerMonth() * this.totalMonth;
                    return getVal;
                },

                totalPay: function (total = this.loanAmount, interest = this.totalInterest()) {
                    var output = this.totalMonth * Math.round(this.interestPerMonth());
                    return output;
                },
            };

            jQuery(function () {
                function loanCalculate() {
                    // Amount One;
                    jQuery("#range-one").slider({
                        value: SetRangeValue.rangeOneActiveVal,
                        min: SetRangeValue.rangeOneMinVal,
                        max: SetRangeValue.rangeOneMaxVal,
                        step: SetRangeValue.rangeOneSteep,
                        slide: function (event, ui) {
                            jQuery("#amount-one").val("$" + ui.value);
                            var TargetOneVal = event.target.parentElement.querySelector("input").value;
                            myLoanCal.loanAmount = parseInt(TargetOneVal.substring(1));
                            loanCalculateTotal();
                            interestPerMonth();
                        },
                    });
                    jQuery("#amount-one").val("$" + $("#range-one").slider("value"));
                    myLoanCal.rangeOneVal = parseInt($("#amount-one").val().substring(1));

                    // Amount Two;
                    jQuery("#range-two").slider({
                        value: SetRangeValue.rangeTwoActiveVal,
                        min: SetRangeValue.rangeTwoMinVal,
                        max: SetRangeValue.rangeTwoMaxVal,
                        step: SetRangeValue.rangeTwoSteep,
                        slide: function (event, ui) {
                            $("#amount-two").val(ui.value + " m");
                            var TargetTwoVal = event.target.parentElement.querySelector("input").value;
                            myLoanCal.totalMonth = parseInt(TargetTwoVal);
                            loanCalculateTotal();
                            interestPerMonth();
                        },
                    });

                    jQuery("#amount-two").val($("#range-two").slider("value") + " m");
                    myLoanCal.rangeTwoVal = parseInt($("#amount-two").val());
                }

                function interestPerMonth() {
                    jQuery("#total-interest").text(Math.round(myLoanCal.interestPerMonth()));
                }

                function loanCalculateTotal() {
                    jQuery("#total-pay").text(Math.round(myLoanCal.totalPay()));
                }

                loanCalculate();
                loanCalculateTotal();
                interestPerMonth();
            });
        </script>

    </body>
</html>
