<?php

namespace App\Providers;

use Laravel\Spark\Spark;
use Laravel\Spark\Providers\AppServiceProvider as ServiceProvider;

class SparkServiceProvider extends ServiceProvider
{
    /**
     * Your application and company details.
     *
     * @var array
     */
    protected $details = [
        'vendor' => 'Your Company',
        'product' => 'Your Product',
        'street' => 'PO Box 111',
        'location' => 'Your Town, NY 12345',
        'phone' => '555-555-5555',
    ];

    /**
     * The address where customer support e-mails should be sent.
     *
     * @var string
     */
    protected $sendSupportEmailsTo = null;

    /**
     * All of the application developer e-mail addresses.
     *
     * @var array
     */
    protected $developers = [
        'uriahg17@gmail.com'
    ];

    /**
     * Indicates if the application will expose an API.
     *
     * @var bool
     */
    protected $usesApi = true;

    /**
     * Finish configuring Spark for the application.
     *
     * @return void
     */
    public function booted()
    {
        Spark::useStripe()->noCardUpFront()->teamTrialDays(10);

        Spark::freeTeamPlan()
            ->features([
                'First', 'Second', 'Third'
            ]);

        Spark::teamPlan('BASIC PLAN', 'spark_test_1')
            ->price(10)
            ->features([
                'First', 'Second', 'Third'
            ]);
	Spark::teamPlan('PRO PLAN', 'spark_test_2')
	    ->price(30)
	    ->features([
		'First', 'Second', 'Third'
	    ]);
	Spark::teamPlan('VIP PLAN', 'spark_test_3')
	    ->price(60)
	    ->features([
		'First', 'Second', 'Third'
	    ]);
    }
}
