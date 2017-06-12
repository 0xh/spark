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
        'vendor' => 'Evolutly',
        'product' => 'Evolutly App',
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
         $this->customizedPlans();
         $this->customizeRoles();
        //  $this->customizeSettingsTabs();
    }
    protected function customizeRoles()
    {
        Spark::defaultRole('tenant');

        Spark::roles([
            'owner' => 'Owner',
            'admin' => 'Administrator',
            'tenant' => 'Tenant',
            'manager' => 'Manager',
            'worker' => 'Worker',
            'client' => 'client'
        ]);
    }
    protected function customizedPlans()
    {
        Spark::useStripe()->noCardUpFront()->teamTrialDays(10);

        Spark::freeTeamPlan()
            // Dont Allow Free Plan to Create Team
            ->maxTeams(0)
            ->features([
                'First', 'Second', 'Third'
            ]);

        Spark::teamPlan('BASIC PLAN', 'spark_test_1')
            ->maxTeams(5)
            ->price(10)
            ->features([
                'First', 'Second', 'Third'
            ]);
        Spark::teamPlan('BASIC PLAN YEARLY', 'spark_test_yearly_1')
            ->maxTeams(5)
            ->price(100)
            ->yearly()
            ->features([
                'First', 'Second', 'Third'
            ]);
        Spark::teamPlan('PRO PLAN', 'spark_test_2')
            ->maxTeams(10)
            ->price(30)
            ->features([
            'First', 'Second', 'Third'
            ]);
        Spark::teamPlan('PRO PLAN YEARLY', 'spark_test_yearly_2')
            ->maxTeams(10)
            ->price(300)
            ->yearly()
            ->features([
                'First', 'Second', 'Third'
            ]);    
        Spark::teamPlan('VIP PLAN', 'spark_test_3')
            ->price(60)
            ->features([
            'First', 'Second', 'Third'
            ]);
        Spark::teamPlan('VIP PLAN YEARLY', 'spark_test_yearly_3')
        ->price(600)
        ->yearly()
        ->features([
            'First', 'Second', 'Third'
        ]);
    }

    protected function customizeRegistration()
    {
        // Spark::validateRegistrationsWith(function (Request $request) {
        //     return [
        //         'name' => 'required|max:255',
        //         'email' => 'required|email|unique:users',
        //         'password' => 'required|confirmed|min:6',
        //         'terms' => 'required|accepted',
        //     ];
        // });

        // Spark::createUsersWith(function (Request $request) {
        //     // Return New User Instance...
        // });

        //  createUsersWith Do Something Like This...

        // protected function createDefaultUser(Request $request)
        // {
        // $model = config('auth.model');

        // return (new $model)->create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => bcrypt($request->password),
        // ]);
        // }
    }

    protected function customizeSettingsTabs()
    {
        Spark::settingsTabs()->configure(function ($tabs) {
            return [
                $tabs->profile(),
                $tabs->teams(),
                $tabs->security(),
                $tabs->subscription(),
                $tabs->make('Name', 'view', 'fa-icon'),
            ];
        });

        Spark::teamSettingsTabs()->configure(function ($tabs) {
            return [
                $tabs->owner(),
                $tabs->membership(),
                // $tabs->make('Name', 'view', 'fa-icon'),
            ];
        });
    }

    protected function customizeProfileUpdates()
    {
        // Spark::validateProfileUpdatesWith(function (Request $request) {
        //     return [
        //         'name' => 'required|max:255',
        //         'email' => 'required|email|unique:users,email,'.$request->user()->id,
        //     ];
        // });

        // Spark::updateProfilesWith(function (Request $request) {
        //     // Update $request->user()...
        // });

        // The default behavior in the ProfileController that you'd be overwriting in updateProfilesWith is:

        // Auth::user()->fill($request->all())->save();
    }
}
