<?php

return array(
    /*
    |--------------------------------------------------------------------------
    | User models
    |--------------------------------------------------------------------------
    |
    | Specify the local model classes.
    |
    */
    'models'  => [
        'role' => 'App\\Role',
        'permission' => 'App\\Permission',
    ],

    /*
    |--------------------------------------------------------------------------
    | Spark User and Team Roles
    |--------------------------------------------------------------------------
    |
    | Specify Spark roles and provide the role hierarchy
    | can be used if you use the trait CanHaveLinkedTeams
    |
    */
    'teamlink'  => [
        'roles' => [
            'developer' => 'Developer',
            'owner' => 'Owner',
            'admin' => 'Administrator',
            'tenant' => 'Tenant',
            'manager' => 'Manager',
            'worker' => 'Worker',
            'client' => 'Client'
        ],
        'canassume' => [
            'developer' => ['owner', 'admin', 'tenant', 'manager','worker','client'],
            'owner' => ['admin','tenant', 'manager','worker','client'],
            'admin' => ['tenant', 'manager','worker','client'],
            'tenant' => ['manager','worker','client'],
            'manager' => ['worker','client']
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Developer
    |--------------------------------------------------------------------------
    |
    | Add all users, or all users in a team, with a given role to the Spark
    | developer array. Caching of developer array can be disabled by setting
    | 'cache' to false.
    |
    */
    'developer'  => [
        'enable' => true,
        'slug' => 'developer',
        'cache' => [
            'key' => 'spark.developers',
            'timeout' => 12 * 60 // 12 hours in minutes
        ]
    ],
);
